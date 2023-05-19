<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WassimAkkariController extends AbstractController
{
    #[Route('/wa_index', name: 'app_wa_index')]
    public function index(): Response
    {
        return $this->render('wa/index.html.twig', [
            'controller_name' => 'WassimAkkariController',
        ]);
    }
    #[Route('/wa_index_param/{metier}', name: 'app_wa_param')]
    public function AfficheMetier($metier): Response
    {
        return $this->render('wa/metier.html.twig', [
            'controller_name' => 'WassimAkkariController',
            'metier' => $metier,
        ]);
    }

}
