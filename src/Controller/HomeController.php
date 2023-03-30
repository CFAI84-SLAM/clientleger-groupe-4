<?php
namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController {
    /**
     * @Route("/", name="accueil")
     */

    public function index(ProductRepository $productRepository): Response
    {

        return $this->render('home.html.twig', ['products' => $productRepository->findAll()]);
    }


}