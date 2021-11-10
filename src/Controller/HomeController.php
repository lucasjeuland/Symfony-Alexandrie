<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * Page d'accueil
     *
     * @Route("/home/{name}", name="home")
     * @Route("/", name="root")
     */
    public function home($name = 'Stranger'): Response
    {
        return $this->render('home.html.twig', ['name' => $name]);
    }
}