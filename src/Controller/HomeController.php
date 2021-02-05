<?php

namespace App\Controller;

use App\Repository\ShoeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(ShoeRepository $shoeRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'shoes' => $shoeRepository->findAll(),
        ]);

    }
}
