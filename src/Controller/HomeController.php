<?php

namespace App\Controller;

use App\Repository\PersonRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(PersonRepository $repository): Response
    {
      $persons = $repository->findAll();

        return $this->render('home/index.html.twig', [
            'personnes' => $persons,
        ]);
    }
}
