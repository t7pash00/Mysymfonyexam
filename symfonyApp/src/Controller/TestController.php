<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function hello()
    {
        $hello = 'this is my test controller';

        return new Response(
            '<html><body>here is a description: '.$hello .'</body></html>'
        );
    }
}