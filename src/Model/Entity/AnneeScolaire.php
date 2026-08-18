<?php

namespace App\Model\Entity;

class AnneeScolaire {
    public ?int $id;
    public string $annee;
    public array $inscriptions;

     public function __construct(?int $id, string $annee,array $inscriptions)
    {
        $this->id = $id;
        $this->annee = $annee;
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