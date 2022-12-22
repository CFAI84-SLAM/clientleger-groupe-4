<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class testController extends AbstractController {
    /**
     * @Route("/test", name="test")
     */

    public function test()
    {
        $test = 10;
        return $this->render('test.html.twig', ['testvar' => $test]);
    }
}