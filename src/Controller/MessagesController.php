<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessagesController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function new(): Response
    {
        return $this->render('messages/contact.html.twig');
    }
}
