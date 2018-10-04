<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PartieController extends AbstractController
{
    /**
     * @Route("/partie", name="partie")
     */
    public function index()
    {
        return $this->render('partie/index.html.twig', [
            'controller_name' => 'PartieController',
        ]);
    }

    /**
     * @Route("/creerpartie", name="creerpartie")
     */
    public function creerpartie()
    {

    }

    /**
     * @Route("/rejoindrepartie", name="rejoindrepartie")
     */
    public function rejoindrepartie()
    {

    }
    /**
     * @Route("/partie/{id}", name="partieid")
     */
    public function partie({id})
    {

    }

}
