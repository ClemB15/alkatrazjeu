<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ConnectionController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        return $this->render('Admin/index.html.twig');
    }

    /**
     * @Route("/superadmin", name="super_admin")
     */
    public function superadmin()
    {
        return $this->render('Super_admin/index.html.twig');
    }

    /**
     * @Route("/accueil", name="accueil")
     */
    public function user()
    {
        return $this->render('Accueil/index.html.twig');
    }

}