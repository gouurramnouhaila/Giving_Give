<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_app")
     */
    public function index()
    {
        return $this->render('home/index.html.twig',[]);
    }

    /**
     * @Route("/hello", name="home_app_cc")
     */
    public function inde()
    {
        return $this->render('home/home.html.twig',[]);
    }


    /**
     * @Route("/auth", name="home_app_jjc")
     * @IsGranted("ROLE_USER")
     */
    public function aut()
    {
        return $this->render('home/home.html.twig',[]);
    }
    
}