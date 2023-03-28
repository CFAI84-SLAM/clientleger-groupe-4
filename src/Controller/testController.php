<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class testController extends AbstractController {
    /**
     * @Route("/", name="accueil")
     */

    public function test()
    {
        $products = ['test1', 'test2', 'test3'];
        $test = 10;
        return $this->render('test.html.twig', ['testvar' => $test]);
    }


}