<?php
namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController {
    /**
     * @Route("/", name="accueil")
     */

    public function index(ProduitRepository $productRepository): Response
    {

        return $this->render('home.html.twig', ['products' => $productRepository->findAll()]);
    }


}