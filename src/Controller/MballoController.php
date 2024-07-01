<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MballoController extends AbstractController
{
    #[Route('/mballo', name: 'app_mballo')]
    public function index(): Response
    {
        return $this->render('mballo/index.html.twig', [
            'controller_name' => 'MballoController',
        ]);
    }

    #[Route('/eportfolio', name: 'app_eportfolio')]
    public function eportfolio(): Response
    {
        return $this->render('mballo/eportfolio.html.twig');
    }

    #[Route('/accueil', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('mballo/accueil.html.twig');
    }

    #[Route('/ensavoirplus', name: 'app_ensavoirplus')]
    public function ensavoirplus(): Response
    {
        return $this->render('mballo/ensavoirplus.html.twig');
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('mballo/portfolio.html.twig');
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('mballo/cv.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('mballo/contact.html.twig');
    }
}
