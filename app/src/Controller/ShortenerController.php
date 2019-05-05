<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShortenerController extends AbstractController
{
    /**
     * @Route("/shortener", name="shortener")
     */
    public function index()
    {
        return $this->render('shortener/index.html.twig', [
            'controller_name' => 'ShortenerController',
        ]);
    }
}
