<?php

namespace App\Model\Entity;

class Role
{
    public ?int $id;
    private string $nom_role;
    public array $utilisateurs;

    public function __construct(?int $id,string $nom_role = 'Administrateur etablissement',array $utilisateurs = []) {
        $this->id = $id;
        $this->nom_role = $nom_role;
        $this->utilisateurs = $utilisateurs;
    }

    public function getNomRole(): string
    {
        return $this->nom_role;
    }

    public function setNomRole(string $nom_role): void
    {
        if ($nom_role == 'Administrateur etablissement' || $nom_role == 'Surveillant' || $nom_role == 'Professeur') 
        {
            $this->nom_role = $nom_role;
        }
    }

    public function getUtilisateur(): array
    {
        return $this->utilisateurs;
    }

    public function ajouterUtilisateur(Eleve $utilisateur): void
    {
        $this->utilisateurs[] = $utilisateur;
    }
}