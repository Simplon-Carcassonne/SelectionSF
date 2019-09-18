<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_JURY", message="No access! Get out!")
 */
class AdminController extends AbstractController
{

    /**
     * @Route("/admin/info", name="admin_profile_info")
     */
    public function information()
    {
        return $this->render('admin/profileInfo.html.twig', [
            'controller_name' => 'AdminController',
            'currentUser' => $this->getUser(),
        ]);
    }
}
