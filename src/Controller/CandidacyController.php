<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Entity\Selection;
use App\Form\CandidacyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CandidacyController extends AbstractController
{
    /**
     * @Route("/candidacy", name="candidacy")
     */
    public function index(EntityManagerInterface $em, Request $request)
    {
        $candidate = new Candidate;
        $form = $this->createForm(CandidacyType::class, $candidate);
        $form->handleRequest($request);

        $selection = $em->getRepository(Selection::class)->findOneByStatus();
        if ($selection == null) {
            $this->addFlash('danger', 'Aucune session de sélection ouverte pour l\'instant !');
            return $this->redirectToRoute('home', ['danger' => true]);
        } else {
            $candidate->setSelection($selection);

            if ($form->isSubmitted() && !$form->isValid()){
                $this->addFlash('alert', 'Attention ! Votre missive n\'a pu être envoyée !');
            } else if ($form->isSubmitted() && $form->isValid()) {
                $em->persist($candidate);
                $em->flush();
                $this->addFlash('success', 'Bien joué : Succès inscription débloqué !');
                return $this->redirectToRoute('home', ['succes' => true]);
            }
            return $this->render('candidacy/index.html.twig', [
                'controller_name' => 'CandidacyController',
                'form' => $form->createView(),
                'currentUser' => $this->getUser(),
            ]);
        }
    }
}
