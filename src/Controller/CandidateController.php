<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Entity\Rate;
use App\Entity\Selection;
use App\Form\CandidateType;
use App\Form\RateType;
use App\Repository\CandidateRepository;
use App\Repository\RateRepository;
use App\Repository\SelectionRepository;
use App\Repository\UserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Utils\SoloLearnParser;

//include_once '/Utils/simple_html_dom.php';

/**
 * @IsGranted("ROLE_JURY", message="No access! Get out!")
 * @Route("admin/candidate")
 */
class CandidateController extends AbstractController
{
    /**
     * @Route("/", name="candidate_index", methods={"GET"})
     * @IsGranted("ROLE_MASTER", message="Raté ! ton role n'est pas fait pour aller ici.")
     */
    public function index(CandidateRepository $candidateRepository): Response
    {
        return $this->render('candidate/index.html.twig', [
            'candidates' => $candidateRepository->findAll(),
            'currentUser' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}/show/{mode}", name="candidate_show", methods={"GET","POST"})
     */
    public function show(
        ObjectManager $manager,
        Request $request,
        Candidate $candidate,
        RateRepository $raterepo,
        UserRepository $userRepo,
        $mode = 'preselection'
    ): Response
    {
        //TODO get SoloLearn Infos
        $parser = new SoloLearnParser();
        //https://www.sololearn.com/Profile/12179285
        $id = $candidate->getSololearn();
        $id = substr($id, 34);
        if(!is_numeric($id)){
            $id = 4287114;
        }
        $rawDatas = $parser->getPageContent($id);//unused ? ...just json is ok

        //echo ($rawDatas);die();

        //return json from the parser to the JS client
        $json =  $parser->getJSONInfos($rawDatas);
        $datas = json_decode($json);
        //var_dump($datas->COURSES);
        //die();
        $totalXP = 0;
        foreach($datas->COURSES as $course){
            //echo $course->XP; //1135 XP
            $xp = explode(" ", $course->XP);
            $totalXP += $xp[0];
        }

        //TODO control if all rates have been given by all Users for this Selection
        if($mode == 'preselection')
            $ratesCandidate = $raterepo ->findAllBySelectionAndCandidate($candidate->getSelection(),$candidate,Rate::TYPE_PRESELECTION);
        else
            $ratesCandidate = $raterepo ->findAllBySelectionAndCandidate($candidate->getSelection(),$candidate,Rate::TYPE_SELECTION);

        $ratesCount = count($ratesCandidate);
        $users = $userRepo->findAll();
        $usersCount = count($users) -1; //-1 for admin
        //TODO have to fix and add RateType notion !!

        if($ratesCount == $usersCount){
            $isRatesOK = true;
        }
        else{
            $isRatesOK = false;
        }


        //TODO control if rate already given by this user to this candidate for this selection !!
        if($mode == 'preselection')
            $newRate = $raterepo ->findOneBySelectionCandidateAndUser($candidate->getSelection(),$candidate,$this->getUser(),Rate::TYPE_PRESELECTION);
        else
            $newRate = $raterepo ->findOneBySelectionCandidateAndUser($candidate->getSelection(),$candidate,$this->getUser(),Rate::TYPE_SELECTION);

        $hasRated = false;
        if(!$newRate){
            $newRate = new Rate();
        }
        else{
            $hasRated = true;
        }

        //TODO persist value in BDD
        $form = $this->createForm(RateType::class, $newRate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newRate ->setCandidate($candidate);
            //$newRate->setValue($request->request->get('rate_value'));
            $newRate->setUser($this->getUser());
            $newRate->setSelection($candidate->getSelection());

            if($candidate->getSelection()->getSelectionStatus() == Selection::STATE_PRESELECTION)
                $newRate->setRateType(Rate::TYPE_PRESELECTION);
            else if($candidate->getSelection()->getSelectionStatus() == Selection::STATE_SELECTION)
                $newRate->setRateType(Rate::TYPE_SELECTION);
            else
                $newRate->setRateType(Rate::TYPE_PRESELECTION);

            $manager->persist($newRate);
            $manager->flush($newRate);
            $this->addFlash('success', 'Ce candidat.e a été mis à jour');
            return $this->redirectToRoute('candidate_show', array('id'=>$candidate->getId()));
        }

        return $this->render('candidate/show.html.twig', [
            'candidate' => $candidate,
            'currentUser' => $this->getUser(),
            'datas' => $datas,
            'form' => $form->createView(),
            'hasRated' => $hasRated,
            'totalXP' => $totalXP,
            'isRatesOK' => $isRatesOK,
            'rateFromUser' => $newRate
        ]);
    }

    /**
     * @Route("/{id}/edit", name="candidate_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_MASTER", message="Raté ! ton role n'est pas fait pour aller ici.")
     */
    public function edit(Request $request, Candidate $candidate): Response
    {
        $form = $this->createForm(CandidateType::class, $candidate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('candidate_index');
        }

        return $this->render('candidate/edit.html.twig', [
            'candidate' => $candidate,
            'form' => $form->createView(),
            'currentUser' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}", name="candidate_delete", methods={"DELETE"})
     * @IsGranted("ROLE_MASTER", message="Raté ! ton role n'est pas fait pour aller ici.")
     */
    public function delete(Request $request, Candidate $candidate): Response
    {
        if ($this->isCsrfTokenValid('delete'.$candidate->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($candidate);
            $entityManager->flush();
        }

        return $this->redirectToRoute('candidate_index', [
            'currentUser' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/admin/selection/{id}/selection", name="candidateStatus")
     * @IsGranted("ROLE_MASTER", message="Raté ! ton role n'est pas fait pour aller ici.")
     *
     * @param ObjectManager $manager
     * @param Candidate $candidate
     * @param CandidateRepository $candidateRepo
     * @return Response
     *
     * OBSOLETE !!
     */
    public function candidateStatus(ObjectManager $manager, Candidate $candidate, CandidateRepository $candidateRepo) :Response{

        $candidates = $candidateRepo->findAll();
        foreach($candidates as $selectionAll){
            $selectionAll->setStatus('0');
            $manager->persist($selectionAll);
        }
        $candidateID = $candidateRepo->findOneBy([
            'id' => $candidate
        ]);

        $candidateID->setStatus('1');
        $manager->persist($candidateID);
        $manager->flush();

        return $this->json([
            'code' => 200,
            'message' => 'selection bien activée',
        ], 200);


    }

    /**
     * @Route("/admin/selection/candidateStatus/{id}/{mode}", name="candidateStatus")
     * @IsGranted("ROLE_MASTER", message="Raté ! ton role n'est pas fait pour aller ici.")
     *
     * @param ObjectManager $manager
     * @param Candidate $candidate
     * @param CandidateRepository $candidateRepo
     * @return Response
     */
    public function candidateChangeStatus(
        ObjectManager $manager,
        Candidate $candidate,
        CandidateRepository $candidateRepo,
        $mode
    ) :Response{
        if($mode =='preselectionOK'){
            $this->addFlash('success', 'Ce candidat.e a été présélectionné.ée !');
            $candidate->setStatus('1');
            $candidate->setSelectionStatus(Candidate::STATE_PRESELECTION);
        }
        else if($mode =='preselectionKO'){
            $this->addFlash('success', 'Ce candidat.e a été refusé en présélection!');
            $candidate->setStatus('0');
            $candidate->setSelectionStatus(Candidate::STATE_PRESELECTION_KO);
        }
        else if($mode =='reset'){
            $this->addFlash('warning', 'Ce candidat.e a été réinitialisé!');
            $candidate->setStatus('0');
            $candidate->setSelectionStatus(Candidate::STATE_FORM);
        }
        else if($mode =='resetSelection'){
            $this->addFlash('warning', 'Ce candidat.e a été réinitialisé en Sélection!');
            $candidate->setStatus('1');
            $candidate->setSimplonien('0');
            $candidate->setSelectionStatus(Candidate::STATE_PRESELECTION);
        }
        else if($mode =='selectionOK'){
            $this->addFlash('success', 'Ce candidat.e a été accepté.e en Sélection!');
            $candidate->setStatus('1');
            $candidate->setSimplonien('1');
            $candidate->setSelectionStatus(Candidate::STATE_SELECTION);
        }
        else if($mode =='selectionKO'){
            $this->addFlash('danger', 'Ce candidat.e a été refusé.e en Sélection!');
            $candidate->setStatus('1');
            $candidate->setSimplonien('0');
            $candidate->setSelectionStatus(Candidate::STATE_SELECTION_KO);
        }
        else if($mode =='selectionWaiting'){
            $this->addFlash('warning', 'Ce candidat.e a été Placé.ée sur liste d\'attente!');
            $candidate->setStatus('1');
            $candidate->setSimplonien('0');
            $candidate->setSelectionStatus(Candidate::STATE_SELECTION_WAITING);
        }

        $manager->persist($candidate);
        $manager->flush();

        return $this->redirectToRoute('candidate_show', array('id'=>$candidate->getId()));
    }

    /**
     * @Route("/admin/selection/preselectionDenied{id}", name="candidatePreselectDeny")
     * @IsGranted("ROLE_MASTER", message="Raté ! ton role n'est pas fait pour aller ici.")
     *
     * @param ObjectManager $manager
     * @param Candidate $candidate
     * @param CandidateRepository $candidateRepo
     * @return Response
     */
    public function candidatePreselectionDenied(ObjectManager $manager, Candidate $candidate, CandidateRepository $candidateRepo) :Response{
        $this->addFlash('danger', 'Ce candidat.e a été refusé en préselection !');
        $candidate->setStatus('0');
        $candidate->setSelectionStatus(Candidate::STATE_PRESELECTION_KO);
        $manager->persist($candidate);
        $manager->flush();
        return $this->redirectToRoute('candidate_show', array('id'=>$candidate->getId()));
    }

    /**
     * @Route("/admin/selection/{id}/selectionstatus/{mode}", name="candidateSelectionStatus")
     * @IsGranted("ROLE_MASTER", message="Raté ! ton role n'est pas fait pour aller ici.")
     *
     * @param ObjectManager $manager
     * @param Candidate $candidate
     * @param CandidateRepository $candidateRepo
     * @return Response
     */
    public function candidateSelectionStatus(ObjectManager $manager, Candidate $candidate, CandidateRepository $candidateRepo,$mode) :Response{
        if($mode == 'selectionOK'){
            $flashMessage = 'Ce candidat.e a été accepté en Formation !';
            $flashClass = 'success';
            $state = Candidate::STATE_SELECTION;
        }
        else if($mode == 'selectionKO'){
            $flashMessage = 'Ce candidat.e a été refusé en Sélection !';
            $flashClass = 'danger';
            $state = Candidate::STATE_SELECTION_KO;
        }
        else if($mode == 'selectionWaiting'){
            $flashMessage = 'Ce candidat.e a est sur la liste d\'attente de la Formation!';
            $flashClass = 'warning';
            $state = Candidate::STATE_SELECTION_WAITING;
        }
        else{
            $flashMessage = 'Ce candidat.e a été refusé en Sélection !';
            $flashClass = 'warning';
            $state = Candidate::STATE_SELECTION_KO;
        }
        //$this->addFlash('warning', 'Ce candidat.e a été refusé en Sélection !');
        //$candidate->setSelectionStatus(Candidate::STATE_SELECTION_KO);

        $this->addFlash($flashClass, $flashMessage);
        $candidate->setSelectionStatus($state);
        $manager->persist($candidate);
        $manager->flush();

        return $this->redirectToRoute('candidate_show', array('id'=>$candidate->getId()));
    }
}
