<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    public function hello()
    {
        $hello = 'this is my test controller';

        return $this->render('hello.html.twig', [
            'hello' => $hello,
        ]);
    }
}