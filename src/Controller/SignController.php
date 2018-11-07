<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SignController extends AbstractController
{
    /**
     * @Route("/sign", name="sign")
     */
    public function index()
    {
        return $this->render('sign/index.html.twig', [
            'controller_name' => 'SignController',
        ]);
    }
}
