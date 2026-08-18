<?php

namespace App\Model\Entity;

class Eleve {
    public ?int $id;
    public string $nom;
    public string $prenom;
    public string $matricule;
    public array $inscriptions;

     public function __construct(?int $id, string $nom, string $prenom, string $matricule, array $inscriptions = [])
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
        $this->inscriptions = $inscriptions;
    }

    public function getInscription(): array
    {
        return $this->inscriptions;
    }

    public function ajouterInscription(Inscription $inscription): void
    {
        $this->inscriptions[] = $inscription;
    }
}