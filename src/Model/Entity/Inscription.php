<?php

namespace App\Model\Entity;

class Inscription {
    public ?int $id;
    public Eleve $idEleve;
    public Classe $idClasse;
    public AnneeScolaire $idAnneeScolaire;
    public array $transferts;

   public function __construct(?int $id, Eleve $idEleve, Classe $idClasse, AnneeScolaire $idAnneeScolaire,array $transferts)  
   {
        $this->id = $id;
        $this->idEleve = $idEleve;
        $this->idClasse = $idClasse;
        $this->idAnneeScolaire = $idAnneeScolaire;
        $this->transferts = $transferts;
   }
    public function getTransfert(): array
    {
        return $this->transferts;
    }

    public function ajouterTransfert(Transfert $transfert): void
    {
        $this->transferts[] = $transfert;
    }
}