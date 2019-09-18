<?php

namespace App\Controller;

use App\Entity\Selection;
use App\Form\SelectionType;
use App\Repository\SelectionRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

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
     * @Route("/{id}", name="selection_show", methods={"GET"})
     */
    public function show(Selection $selection): Response
    {
        return $this->render('selection/show.html.twig', [
            'selection' => $selection,
            'currentUser' => $this->getUser(),
        ]);
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
}
