<?php

namespace App\Controller\API;

use App\Entity\Reservation;
use App\Entity\Statut;
use App\Entity\Voyage;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/reservation', name: 'api_reservation_')]
class ReservationController extends AbstractController
{

    #[Route('s', name: 'index')]
    public function index(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();
        
        return $this->json(data: $reservations, context: ['groups' => 'api_reservation_index']);
    }


    #[Route('/new', name: 'new', methods:['POST', 'GET'])]
    public function new(Request $request, EntityManagerInterface $em, SerializerInterface $serializer, ValidatorInterface $validator): Response
    {
        $reservation = $serializer->deserialize($request->getContent(), Reservation::class, 'json', context: ['groups' => 'api_reservation_new']);
       
        $requestedTravelData = json_decode($request->getContent());
        $requestedTravelId = intval($requestedTravelData->voyage_id);

        $travelRepo = $em->getRepository(Voyage::class);
        $requestedTravel = $travelRepo->find($requestedTravelId);
        
        $StatutRepo = $em->getRepository(Statut::class);
        $requestedStatut = $StatutRepo->find(1);

        $reservation->setVoyage($requestedTravel);
        $reservation->setStatut($requestedStatut);

        $errors = $validator->validate($reservation);

        if($errors->count()){

        $messages = [];
        foreach ($errors as $error){
            $messages[] = $error->getMessage();
        }
        return $this->json($messages, Response::HTTP_UNPROCESSABLE_ENTITY);

        }else {

            $em->persist($reservation);
            $em->flush();

            return $this->json(null, Response::HTTP_CREATED);
        }
    }
}

