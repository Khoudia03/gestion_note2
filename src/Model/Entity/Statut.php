<?php

namespace App\Model\Entity;

class Statut {
    public int $id;
    private string $nom;
    public array $eleves;

    public function __construct(int $id, string $nom, array $eleves=[]) 
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->eleves = $eleves;
    }

    public function getNom() : string 
    {
        return $this->nom;
    }

    public function setNom(string $nom) : void 
    {
        if($nom == 'Inscrit' || $nom == 'Non affecte' || $nom == 'En attente')
        {
            $this->nom = $nom;
        }
    }

    public function getEleves(): array
    {
        return $this->eleves;
    }

    public function ajouterEleves(Eleve $eleve): void
    {
        $this->eleves[] = $eleve;
    }
}