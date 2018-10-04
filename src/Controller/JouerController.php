<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JouerController extends AbstractController
{
    /**
     * @Route("/jouer", name="jouer")
     */
    public function index()
    {
        return $this->render('jouer/index.html.twig', [
            'controller_name' => 'JouerController',
        ]);
    }

    /**
     * @Route("/piocher", name="piocher")
     */
    public function piocher()
    {

    }

    /**
     * @Route("/troquer", name="troquer")
     */
    public function troquer()
    {

    }

    /**
     * @Route("/vendre", name="vendre")
     */
    public function vendre()
    {

    }

    /**
     * @Route("/terminer", name="terminer")
     */
    public function terminer()
    {

    }
}
