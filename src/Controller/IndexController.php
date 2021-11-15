<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;
use App\Entity\Produit;
use App\Entity\Client;

class IndexController extends AbstractController
{
    /**
     * @Route("index", name="index")
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
     * @Route("/BMX", name="BMX")
     */
    public function BMX(): Response
    {
        return $this->render('index/bmx.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
     * @Route("/panier", name="Panier")
     */
    public function panier(): Response
    {

    // $image = $this->getImage();
    // dd($image);
    $user = $this->getUser();

        return $this->render('index/panier.html.twig', [
            'controller_name' => 'bienvenue',
            'user' => $user,
            // 'image' => $image,
        ]);
    }
}
