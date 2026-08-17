<?php

namespace App\Model\Entity;

class Classe {
    private int $id;
    private string $nomClasse;

     public function __construct(int $id, string $nomClasse)
    {
        $this->id = $id;
        $this->libelle = $nomClasse;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

     public function getNomClasse(): string
    {
        return $this->nomClasse;
    }
}