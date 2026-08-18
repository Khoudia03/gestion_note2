<?php

namespace App\Model\Entity;

class Responsable {
    public int $id;
    public string $nom;
    public string $prenom;
    public ?string $numero;
    public ?string $adresse;
    public array $eleves = [];

    public function __construct(int $id,string $nom,string $prenom,?string $numero,?string $adresse,array $eleves = []) 
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $numero;
        $this->tel = $adresse;
    }

    public function getEleve(): array
    {
        return $this->eleves;
    }

    public function ajouterEleve(Eleve $eleve): void
    {
        $this->eleves[] = $eleve;
    }
}