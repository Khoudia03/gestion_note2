<?php

namespace App\Model\Entity;

class Inscription {
    private int $id;
    private Eleve $idEleve;
    private Classe $idClasse;
    private AnneeScolaire $idAnneeScolaire;
   

    public function getId(): ?int
    {
        return $this->id;
    }
}