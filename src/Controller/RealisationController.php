<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisationController extends AbstractController
{
    /**
     * @Route("/realisations", name="realisations")
     */
    public function index(): Response
    {
        return $this->render('realisations/realisations.html.twig');
    }
}