<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/login", name="app_loginpage")
     */
    public function login()
    {
        return $this->render('admin/login.html.twig', [
        
            ]);
    }

    /**
     * @Route("/admin", name="app_homeadmin")  
     */
    public function admin()
    {
        /* IF USER LOGGED */
        return $this->render('admin/home.html.twig', [
        
        ]);
       
        /* IF USER NOT LOGGED */
        return $this->render('admin/login.html.twig', [
        
        ]);
        
    }

    /**
     * @Route("/admin/logout", name="app_logout")
     */
    public function logout()
    {
        /* DISCONNECT USER AND THAN REDER LOGIN PAGE */
        return $this->render('admin/login.html.twig', [
        
            ]);
    }
}