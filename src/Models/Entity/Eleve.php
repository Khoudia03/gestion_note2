<?php

namespace App\Model\Entity;

class Eleve {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $matricule;

     public function __construct(int $id, string $nom, string $prenom, string $matricule)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getMatricule(): string
    {
        return $this->matricule;
    }
}