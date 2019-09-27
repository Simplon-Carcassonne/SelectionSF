<?php

namespace App\Controller;

use App\Entity\Selection;
use App\Entity\Candidate;
use App\Entity\Rate;
use App\Form\SelectionType;
use App\Repository\CandidateRepository;
use App\Repository\SelectionRepository;
use App\Service\SelectionHelper;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\Finder\Finder;

/**
 * @IsGranted("ROLE_JURY", message="No access! Get out!")
 * @Route("/admin/selection")
 */
class SelectionController extends AbstractController
{
    /**
     * @Route("/", name="selection_index", methods={"GET"})
     */
    public function index(SelectionRepository $selectionRepository): Response
    {
        return $this->render('selection/index.html.twig', [
            'selections' => $selectionRepository->findAll(),
            'currentUser' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/new", name="selection_new", methods={"GET","POST"})
     *
     * @IsGranted("ROLE_MASTER", message="No access! Get out!")
     */
    public function new(Request $request): Response
    {
        $selection = new Selection();
        $form = $this->createForm(SelectionType::class, $selection);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $selection->setStatus(false);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($selection);
            $entityManager->flush();

            return $this->redirectToRoute('selection_index');
        }

        return $this->render('selection/new.html.twig', [
            'selection' => $selection,
            'form' => $form->createView(),
            'currentUser' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}/{mode}", name="selection_show", methods={"GET"})
     */
    public function show(Selection $selection, $mode = null, CandidateRepository $candidateRepo, SelectionHelper $helper): Response
    {
        if($mode == 'preselected'){
            //get All Candidates for this selection
            $candidates = $candidateRepo->getPreselectedCandidatesBySelectionAlphabetical($selection);
        }
        else if($mode == 'preselectedRate'){
            $candidatesunfilered = $candidateRepo->getPreselectedCandidatesBySelectionAlphabetical($selection);

            $candidates = $candidatesunfilered;
            $indice = 0;
            foreach($candidatesunfilered as $candidate){
                $total = $helper->getCandidateTotalRates($selection, $candidate, Rate::TYPE_PRESELECTION);
                //$candidates[$indice]['total'] =  $total;
                $candidates[$indice]->total =  $total;
                $indice++;
            }
            //https://stackoverflow.com/questions/2699086/how-to-sort-multi-dimensional-array-by-value
            usort($candidates, function($a, $b) {
                return $b->total <=> $a->total;
            });

            /*usort($candidates, function($a, $b) {
                return $a['total'] <=> $b['total'];
            });*/

        }
        else if($mode == 'selected'){
            $candidates = $candidateRepo->getSelectedCandidatesBySelectionAlphabetical($selection);
        }
        else{
            //get All Candidates for this selection
            $candidates = $candidateRepo->getCandidatesBySelectionAlphabetical($selection);
        }


        $hasAccess = $this->isGranted('ROLE_MASTER');
        $isJury = $this->isGranted('ROLE_JURY');
        if($isJury && !$hasAccess){
            $status = $selection->getSelectionStatus() ;
            if($status == Selection::STATE_FORM || $status == Selection::STATE_CLOSED || $status == Selection::STATE_ENDED || $status == ""){
                $this->addFlash('danger', 'Cette sélection n\'est pas encore ouverte !');
                return $this->redirectToRoute('selection_index');

            }
            else{
                return $this->render('selection/show.html.twig', [
                    'selection' => $selection,
                    'currentUser' => $this->getUser(),
                    'candidates'=>$candidates
                ]);
            }
        }
        else{
            return $this->render('selection/show.html.twig', [
                'selection' => $selection,
                'currentUser' => $this->getUser(),
                'candidates'=>$candidates
            ]);
        }
    }

    /**
     * @Route("changeStatus/{id}/{nextStep}", name="selection_changeStatus", methods={"GET","POST"})
     * @IsGranted("ROLE_MASTER", message="No access! Get out!")
     */
    public function changeSelectionStatus(ObjectManager $manager,Selection $selection, $nextStep = null):Response{

        if($nextStep){
            switch($nextStep){
                case 'Fermée':
                    $selection->setSelectionStatus(Selection::STATE_CLOSED);
                    break;
                case 'Formulaire ouvert':
                    $selection->setSelectionStatus(Selection::STATE_FORM);
                    break;
                case 'Préselection':
                    $selection->setSelectionStatus(Selection::STATE_PRESELECTION);
                    break;
                case 'Sélection':
                    $selection->setSelectionStatus(Selection::STATE_SELECTION);
                    break;
                case 'Terminée':
                    $selection->setSelectionStatus(Selection::STATE_ENDED);
                    break;
                default:
                    $selection->setSelectionStatus(Selection::STATE_CLOSED);
                    break;
            }
            $manager->persist($selection);
            $manager->flush();

            $this->addFlash('success', 'La sélection est maintenant : '.$nextStep);
            return $this->redirectToRoute('selection_show',array('id'=>$selection->getId()));
        }
        else{
            $this->addFlash('danger', 'ERROR : Pas de mode !');
            return $this->redirectToRoute('selection_show');
        }
    }

    /**
     * @Route("/{id}/edit", name="selection_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_MASTER", message="No access! Get out!")
     */
    public function edit(Request $request, Selection $selection): Response
    {
        $form = $this->createForm(SelectionType::class, $selection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('selection_index');
        }

        return $this->render('selection/edit.html.twig', [
            'selection' => $selection,
            'form' => $form->createView(),
            'currentUser' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}", name="selection_delete", methods={"DELETE"})
     * @IsGranted("ROLE_MASTER", message="No access! Get out!")
     */
    public function delete(Request $request, Selection $selection): Response
    {
        if ($this->isCsrfTokenValid('delete'.$selection->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($selection);
            $entityManager->flush();
        }

        return $this->redirectToRoute('selection_index');
    }

    /**
     * @Route("/admin/selection/{id}/selection", name="selectionStatus")
     * @IsGranted("ROLE_MASTER", message="No access! Get out!")
     *
     * @param ObjectManager $manager
     * @param Selection $selection
     * @param SelectionRepository $repoSelection
     * @return Response
     */
    public function selectionStatus(ObjectManager $manager, Selection $selection, SelectionRepository $repoSelection) :Response{

        $selections = $repoSelection->findAll();
        foreach($selections as $selectionAll){
            $selectionAll->setStatus(false);
            $manager->persist($selectionAll);
        }
        $selectionID = $repoSelection->findOneBy([
            'id' => $selection
        ]);

        $selectionID->setStatus(true);
        $manager->persist($selectionID);
        $manager->flush();

        return $this->json([
            'code' => 200,
            'message' => 'selection bien activée',
        ], 200);
    }

    /**
     * @Route("/special/csv/{id}", name="readCsv")
     * @IsGranted("ROLE_ADMIN", message="No access! Get out!")
     *
     * @param Selection $selection
     * @param SelectionRepository $repoSelection
     * @return Response
     */
    public function readCSV(Selection $selection){

        $datas = $this->getDatasFromCSV();

        return $this->render('selection/readcsv.html.twig', [
            'selection' => $selection,
            'currentUser' => $this->getUser(),
            'datas' => $datas,
        ]);
    }

    /**
     * @Route("/special/saveCsv/{id}", name="saveCsv")
     * @IsGranted("ROLE_ADMIN", message="No access! Get out!")
     *
     * @param ObjectManager $manager
     * @param Selection $selection
     * @param SelectionRepository $repoSelection
     * @return Response
     */
    public function saveCandidateFromCSV(ObjectManager $manager, Selection $selection){

        $datas = $this->getDatasFromCSV();

        //save in bdd all these new candidates
        $stopIndice = 0;
        $debug = false;
        if($debug){
            foreach ($datas as $data){
                if($stopIndice < 2){
                    $candidate = new Candidate();
                    $candidate->hydrate($data,$selection);
                    $manager->persist($candidate);
                }
                else{
                    break;
                }
                $stopIndice++;
            }
        }
        else{
            foreach ($datas as $data){
                $candidate = new Candidate();
                $candidate->hydrate($data,$selection);
                $manager->persist($candidate);
            }
        }

        $manager->flush();

        return $this->redirectToRoute('selection_index');
    }


    private function getDatasFromCSV($csvFileName = 'datas3Final'){

        //https://symfony.com/blog/new-in-symfony-3-2-csv-and-yaml-encoders-for-serializer
        //https://symfony.com/doc/current/components/serializer.html
        //https://www.novaway.fr/blog/tech/comment-utiliser-le-serializer-symfony

        $serializer = new Serializer([new ObjectNormalizer()], [new CsvEncoder()]);
        $finder = new Finder();
        $finder->files()->name('*.csv')->in('../public/csv');
        // check if there are any search results
        $fileToImport = null;
        if ($finder->hasResults()) {
            //$status = "OK";
            /*foreach ($finder as $file) {
                //$absoluteFilePath = $file->getRealPath();
                //$fileNameWithExtension = $file->getRelativePathname();
                $fileToImport  = $file;
            }*/

            // decoding CSV contents
            //$datas = $serializer->decode(file_get_contents('../public/csv/datas3.csv'), 'csv');
            $datas = $serializer->decode(file_get_contents('../public/csv/'.$csvFileName.'.csv'), 'csv');

            $unikDatas = array(0);

            //remove duplicate    ////$datas = array_unique($datas); error here for array to string conversion !!
            foreach($datas as $data){
                $email = $data['Email'];
                //echo ' <br> email => '.$email;
                $canAdd = false;
                foreach($unikDatas as $dataRecord){
                    if($email != $dataRecord['Email']){
                        $canAdd = true;
                    }
                    else{
                        $canAdd = false;
                        break;
                    }
                }
                if($canAdd){
                    array_push($unikDatas, $data);
                }
            }
            unset($unikDatas[0]);
            return $unikDatas;

            //Open the file.
            /*$fileHandle = fopen("example.csv", "r");

            //Loop through the CSV rows.
            while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
                //Dump out the row for the sake of clarity.
                var_dump($row);
            }*/
        }
        else{
            //$status = "KO";
            return null;
        }
    }
}
