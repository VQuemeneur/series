<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class MainController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {

        return $this->render('main/home.html.twig',[
            'controller_name' => 'MainController',
        ]);

    }

    #[Route('/test')]
    public function test(): Response
    {
        $serie = [
            "title" => "Game of Thrones",
            "year" => 2000,
        ];
        return $this->render('main/test.html.twig',[
            'controller_name' => 'MainController',
            "mySerie" => $serie,
            "autreVar"=> 412412
        ]);

    }
}