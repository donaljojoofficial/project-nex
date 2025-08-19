<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Dummy data array
        $threats = [
            ['level' => 'High Risk', 'message' => 'SQL Injection attempt blocked at 19:05 IST', 'color' => '#0ff'],
            ['level' => 'Medium Risk', 'message' => 'Suspicious login from unrecognized IP', 'color' => '#ff0'],
            ['level' => 'System Stable', 'message' => 'No active threats detected', 'color' => '#0f0'],
        ];

        return $this->render('home/index.html.twig', [
            'threats' => $threats,
        ]);
    }
}
