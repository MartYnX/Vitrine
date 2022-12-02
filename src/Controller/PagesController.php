<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/', name: 'app_Home')]
    public function Home(): Response
    {
        return $this->render('pages/home.html.twig');
    }

    #[Route('/about', name: 'app_About')]
    public function About(): Response
    {
        return $this->render('pages/about.html.twig');
    }
}
