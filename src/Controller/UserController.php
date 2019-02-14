<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/admin/profile", name="app_userprofile")
     */
    public function userprofile()
    {
        return $this->render('admin/login.html.twig', [
        
            ]);
    }

    
}