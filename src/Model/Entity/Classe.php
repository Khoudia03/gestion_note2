<?php

namespace App\Model\Entity;

class Classe {
    public ?int $id;
    public string $nomClasse;
    public Etablissement $idEtablissement;
    public array $inscriptions;

     public function __construct(?int $id, string $nomClasse,Etablissement $idEtablissement,array $inscriptions)
    {
        $this->id = $id;
        $this->libelle = $nomClasse;
        $this->idEtablissement = $idEtablissement;
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