<?php

namespace App\Controller;

use App\Repository\SelectionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->redirect($this->generateUrl('home'));
    }

    /**
     * @Route("/home", name="home")
     */
    public function home(SelectionRepository $repo, Request $request)
    {

        $selection = $repo->findAll();

        return $this->render('home/index.html.twig', [
            'selection' => $selection,
            'currentUser' => $this->getUser(),

        ]);
    }
}
