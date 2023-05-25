<?php
namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
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


    /**
     * @Route("/entrees", name="entrees")
     */

    public function entrees(ProduitRepository $productRepository, CategorieRepository  $categorieRepository): Response
    {

        $categorie = $categorieRepository->findOneBy(array("type" => "entrée"));


        return $this->render('entree.html.twig', ['products' => $productRepository->findBy(array('idCategorie' => $categorie->getidCategorie()))]);
    }


    /**
     * @Route("/plats", name="plats")
     */

    public function plats(ProduitRepository $productRepository, CategorieRepository  $categorieRepository): Response
    {

        $categorie = $categorieRepository->findOneBy(array("type" => "plat"));

        return $this->render('plat.html.twig', ['products' => $productRepository->findBy(array('idCategorie' =>$categorie->getidCategorie()))]);
    }



    /**
     * @Route("/desserts", name="desserts")
     */

    public function entree(ProduitRepository $productRepository, CategorieRepository  $categorieRepository): Response
    {

        $categorie = $categorieRepository->findOneBy(array("type" => "dessert"));

        return $this->render('dessert.html.twig', ['products' => $productRepository->findBy(array('idCategorie' =>$categorie->getidCategorie()))]);
    }

}