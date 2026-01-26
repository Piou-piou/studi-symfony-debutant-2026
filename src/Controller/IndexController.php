<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'Mon controller index',
            'firstnames' => [
                'anthony',
                'bruno',
                'pierre',
            ]
        ]);
    }

    // exemple de route multiple
    #[Route('/create', name: 'create')]
    #[Route('/edit/{firstname}/{lastname}', name: 'edit')]
    public function edit(?string $firstname, ?string $lastname = null): Response
    {
        return new Response('Hello '.$firstname.' '.$lastname.' !');
    }
}
