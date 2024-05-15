<?php

namespace App\Controller\API;

use App\Entity\Voyage;
use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/api/voyage', name: ('api_voyage_'))]
class VoyageController extends AbstractController
{
    
    #[Route('s', name: 'index')]
    public function index(VoyageRepository $voyageRepository): Response
    {

        $voyages = $voyageRepository->findAll();

        return $this->json($voyages, context: ['groups' => 'api_voyage_index']);
    }

    #[Route('/{nom}', name: 'nom')]
    public function nom(Voyage $voyage): Response
    {

        return $this->json($voyage, context: ['groups' => 'api_voyage_index', 'api_voyage_nom']);
    }



//     #[Route('/api/film', name: 'api_film_')]
//     class FilmController extends AbstractController
// {
//     #[Route('s', name: 'index')]
//     public function index(FilmRepository $filmRepository): Response
//     {
//         $films = $filmRepository->findAll();

//         return $this->json($films, context: ['groups' => 'api_film_index']); 
// // en json on peut pas donner les catégories en relation de la table film
//     }
}
