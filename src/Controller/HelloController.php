<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    private array $messages = [ "Ahmed", "Amin", "Faouzi"];
        #[Route('/', name: 'app_index')]
        public function index():Response
        {
        // return new Response("Hello group MDW31");
        return new Response("Hello ".implode(', ', $this->messages));
        }
        #[Route('/messages/{id}', name: 'app_show_one')]
        public function showOne($id): Response
        {
        return new Response($this->messages[$id]);
        }
        
    
}
