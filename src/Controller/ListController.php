<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index(): Response
    {
        $companies = [
            "Apple" => "destrucsauhasard",
            "Samsung" => "encoredurandom",
            "Microsoft" => "etouidurandom"
        ];
        return $this->render('list/index.html.twig', [
            'controller_name' => 'ListController',
            'companies' => $companies,
        ]);
    }
}
