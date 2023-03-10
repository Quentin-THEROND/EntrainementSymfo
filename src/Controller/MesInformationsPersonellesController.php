<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MesInformationsPersonellesController extends AbstractController
{
    #[Route('/infosperso', name: 'app_mes_informations_personelles')]
    public function index(): Response
    {
        return $this->render('mes_informations_personelles/index.html.twig', [
            'controller_name' => 'MesInformationsPersonellesController',
        ]);
    }
}
