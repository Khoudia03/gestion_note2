<?php

namespace App\Model\Entity;

class Utilisateur
{
    public int $id;
    public string $nom;
    public string $prenom;
    public string $email;
    public string $motPasse;
    public Role $role;
    public array $inscriptions;

    public function __construct(int $id,string $nom,string $prenom,string $email,string $motPasse,Role $role, array $inscriptions = [])
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->motPasse = $motPasse;
        $this->role = $role;
        $this->inscriptions = $inscriptions;
    }
    public function getInscription(): array
    {
        return $this->inscriptions;
    }

    public function ajouterInscription(Eleve $inscription): void
    {
        $this->inscriptions[] = $inscription;
    }

}