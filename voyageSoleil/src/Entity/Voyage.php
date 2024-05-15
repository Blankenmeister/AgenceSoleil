<?php

namespace App\Entity;

use App\Repository\VoyageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[UniqueEntity(fields: 'nom', message: 'Ce nom est déjà utilisé.')]
#[ORM\Entity(repositoryClass: VoyageRepository::class)]
class Voyage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups('api_voyage_index', 'api_voyage_nom')]
    private ?int $id = null;

    
    #[Assert\Length(min:2, max:100, minMessage: 'le nom du voyage doit comporter plus de 2 caractères', maxMessage: 'Le nom doit comporter moins de 100 caractères.')]
    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[ORM\Column(length: 150)]
    #[Groups('api_voyage_index', 'api_voyage_nom')]
    private ?string $nom = null;

    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[ORM\Column]
    #[Groups('api_voyage_index', 'api_voyage_nom')]
    private ?int $nombreVoyageur = null;

    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[Assert\LessThan("+1 year", message: "La date de sortie ne peut dépasser {{ compared_value }}.")]
    #[Assert\GreaterThan("today", message: "La date de sortie ne peut pas etre antérieure à aujourd'hui.")]
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups('api_voyage_index', 'api_voyage_nom')]
    private ?\DateTimeInterface $dateDebut = null;

    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups('api_voyage_index', 'api_voyage_nom')]
    private ?\DateTimeInterface $dateFin = null;

    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[ORM\Column(length: 100)]
    #[Groups('api_voyage_index', 'api_voyage_nom')]
    private ?string $prix = null;

    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[ORM\ManyToOne(inversedBy: 'voyages')]
    #[ORM\JoinColumn(nullable: false)]
    
    private ?User $user = null;
    
    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[ORM\ManyToOne(inversedBy: 'voyages')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups('api_voyage_index', 'api_voyage_nom')]
    private ?Logement $logement = null;

    #[Assert\NotBlank(message: 'Le champs ne peut pas être vide')]
    #[ORM\ManyToOne(inversedBy: 'voyages')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups('api_voyage_index', 'api_voyage_nom')]
    private ?Destination $destination = null;

    /**
     * @var Collection<int, Categorie>
     */
    #[ORM\ManyToMany(targetEntity: Categorie::class, inversedBy: 'voyages')]
    #[Groups('api_voyage_index', 'api_voyage_nom')]
    private Collection $categorie;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'voyage')]
    private Collection $reservation;

  
    public function __construct()
    {
        $this->categorie = new ArrayCollection();
        $this->reservation = new ArrayCollection();
    }



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

    public function getNombreVoyageur(): ?int
    {
        return $this->nombreVoyageur;
    }

    public function setNombreVoyageur(int $nombreVoyageur): static
    {
        $this->nombreVoyageur = $nombreVoyageur;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

   

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getLogement(): ?Logement
    {
        return $this->logement;
    }

    public function setLogement(?Logement $logement): static
    {
        $this->logement = $logement;

        return $this;
    }

    public function getDestination(): ?Destination
    {
        return $this->destination;
    }

    public function setDestination(?Destination $destination): static
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategorie(): Collection
    {
        return $this->categorie;
    }

    public function addCategorie(Categorie $categorie): static
    {
        if (!$this->categorie->contains($categorie)) {
            $this->categorie->add($categorie);
        }

        return $this;
    }

    public function removeCategorie(Categorie $categorie): static
    {
        $this->categorie->removeElement($categorie);

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(Reservation $reservation): static
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation->add($reservation);
            $reservation->setVoyage($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservation->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getVoyage() === $this) {
                $reservation->setVoyage(null);
            }
        }

        return $this;
    }

   

}
