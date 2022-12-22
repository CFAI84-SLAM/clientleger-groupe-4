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
        return new Response('<html><body>test</body></html>');
    }
}