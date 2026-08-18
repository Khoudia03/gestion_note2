<?php

namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\Classe;
use App\Model\Entity\Etablissement;
use PDO;

class ClasseRepository
{
    public static function getAllClasse(): array
    {
        $pdo = Database::getInstance()->getConnection();

        $sql = "
            SELECT
                c.id,
                c.nom_classe,
                e.id AS etablissement_id,
                e.nom AS etablissement_nom
            FROM classes c
            INNER JOIN etablissements e
                ON e.id = c.etablissement_id
            ORDER BY c.id DESC
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $classes = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $etablissement = new Etablissement(
                (int) $row['etablissement_id'],
                $row['etablissement_nom']
            );

            $classes[] = new Classe(
                (int) $row['id'],
                $row['nom_classe'],
                $etablissement,
                []
            );
        }

        return $classes;
    }
}