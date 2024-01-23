<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/series', name: "serie_")]
class SerieController extends AbstractController

{
    #[Route('', name: "list")]
    public function list(): Response
    {
        //todo : chercher les series en BDD
        return $this->render('serie/list.html.twig',[
          //  'controller_name' =>'SerieController',
        ]);
    }

    #[Route('/details/{id}', name: "details")]
    public function details(int $id): Response
    {
        //todo : chercher la serie en BDD
        return $this->render('serie/details.html.twig',[
            //  'controller_name' =>'SerieController',
        ]);
    }

    #[Route('/create', name: "create")]
    public function create(): Response
    {

        return $this->render('serie/create.html.twig',[
            //  'controller_name' =>'SerieController',
        ]);
    }
}