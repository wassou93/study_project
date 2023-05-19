<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'app_voiture')]
    public function index(): Response
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }

    #[Route('/voiture/affiche', name: 'affiche_voiture')]
    public function afficheVoiture(): Response
    {
        $voitures = array(array('id'=>1, 'marque'=>'BMW', 'Vitesse'=>240, 'puissance'=>10),
            array('id'=>2, 'marque'=>'Ford', 'Vitesse'=>200, 'puissance'=>6),
            array('id'=>3, 'marque'=>'Audi', 'Vitesse'=>240, 'puissance'=>8),
            array('id'=>4, 'marque'=>'Peugeot', 'Vitesse'=>200, 'puissance'=>4));

        return $this->render('voiture/affiche.html.twig', [
            'controller_name' => 'VoitureController',
            'listV' => $voitures,
        ]);
    }

    #[Route('/voiture/affiche/{vitesse}/{puissance}', name: 'affiche_voiture_vp')]
    public function afficheVoitureVP($vitesse, $puissance): Response
    {
        return $this->render('voiture/affichepv.html.twig', [
            'controller_name' => 'VoitureController',
            'vitesse' => $vitesse,
            'puissance' => $puissance,
        ]);
    }
}
