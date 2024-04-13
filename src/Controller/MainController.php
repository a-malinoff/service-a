<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: '/main', name: 'main')]
class MainController extends AbstractController
{
    #[Route(path: '', name: 'index', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json(['success' => true]);
    }
}