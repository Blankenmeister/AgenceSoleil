<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    #[Assert\Length(min:2, max:100, minMessage: 'le nom du voyage doit comporter plus de 2 caractères', maxMessage: 'Le nom doit comporter moins de 100 caractères.')]
    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[Groups('api_reservation_new')]
    private ?string $nom = null;

    #[ORM\Column(length: 150)]
    #[Assert\Length(min:2, max:100, minMessage: 'le nom du voyage doit comporter plus de 2 caractères', maxMessage: 'Le nom doit comporter moins de 100 caractères.')]
    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[Groups('api_reservation_new')]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[Groups('api_reservation_new')]
    private ?string $email = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups('api_reservation_new')]
    #[Assert\Length(min:2, max:500, minMessage: 'le nom du voyage doit comporter plus de 2 caractères', maxMessage: 'Le nom doit comporter moins de 500 caractères.')]
    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    private ?string $message = null;

    #[ORM\ManyToOne(inversedBy: 'reservation')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups('api_reservation_new')]
    private ?Voyage $voyage = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups('api_reservation_new')]
    private ?Statut $statut = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getVoyage(): ?Voyage
    {
        return $this->voyage;
    }

    public function setVoyage(?Voyage $voyage): static
    {
        $this->voyage = $voyage;

        return $this;
    }

    public function getStatut(): ?Statut
    {
        return $this->statut;
    }

    public function setStatut(?Statut $statut): static
    {
        $this->statut = $statut;

        return $this;
    }



    
}
