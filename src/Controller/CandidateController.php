<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Entity\Selection;
use App\Form\CandidateType;
use App\Repository\CandidateRepository;
use App\Repository\SelectionRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_JURY", message="No access! Get out!")
 * @Route("admin/candidate")
 */
class CandidateController extends AbstractController
{
    /**
     * @Route("/", name="candidate_index", methods={"GET"})
     */
    public function index(CandidateRepository $candidateRepository): Response
    {
        return $this->render('candidate/index.html.twig', [
            'candidates' => $candidateRepository->findAll(),
            'currentUser' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}", name="candidate_show", methods={"GET"})
     */
    public function show(Candidate $candidate): Response
    {
        return $this->render('candidate/show.html.twig', [
            'candidate' => $candidate,
            'currentUser' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="candidate_edit", methods={"GET","POST"})
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
}
