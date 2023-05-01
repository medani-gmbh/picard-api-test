<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfrastructureCommandsController extends AbstractController
{
    #[Route('/infrastructure/commands', name: 'app_infrastructure_commands')]
    public function index(): Response
    {
        return $this->render('infrastructure_commands/index.html.twig', [
            'controller_name' => 'InfrastructureCommandsController',
        ]);
    }
}
