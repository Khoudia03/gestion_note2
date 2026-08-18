<?php

namespace App\Model\Entity;

class Etablissement {
    public ?int $id;
    public string $nom;
    public array $classes;

    public function __construct(?int $id,string $nom,array $classes = []) {
        $this->id = $id;
        $this->nom = $nom;
        $this->classes = $classes;
    }
     public function getClasse(): array
    {
        return $this->classes;
    }

    public function ajouterClasse(Eleve $classe): void
    {
        $this->classes[] = $classe;
    }
}