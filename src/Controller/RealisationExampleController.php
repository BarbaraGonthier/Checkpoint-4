<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\RealisationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisationExampleController extends AbstractController
{
    /**
     * @Route("/realisations", name="realisations")
     */
    public function index(CategoryRepository $categoryRepository, RealisationRepository $realisationRepository): Response
    {
        $categories = $categoryRepository->findAll();
        $realisations = $realisationRepository->findAll();

        return $this->render('realisation-example/realisations.html.twig', [
            'categories' => $categories,
            'realisations' => $realisations
        ]);
    }
}