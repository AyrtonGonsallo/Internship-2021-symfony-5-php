<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    public function test(Request $request): Response
    {
        $age = $request->query->get('age',0);
        //dd("vous avez $age ans");
        return new Response("vous avez $age ans");
        
    }
    public function identification(Request $request): Response
    {
        $nom = $request->attributes->get('nom');
        $prenom = $request->attributes->get('prenom');
        $age = $request->attributes->get('age');
        return new Response("vous etes $nom $prenom et vous avez $age ans");
        
    }
}
