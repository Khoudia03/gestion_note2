<?php

namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\Eleve;
use PDO;

class EleveRepository
{
    public static function getAllEleve(): array
    {
        $pdo = Database::getInstance()->getConnection();

        $sql = "
            SELECT
                id,
                nom,
                prenom,
                matricule
            FROM eleves
            ORDER BY id DESC
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $eleves = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $eleves[] = new Eleve(
                (int) $row['id'],
                $row['nom'],
                $row['prenom'],
                $row['matricule']
            );
        }

        return $eleves;
    }
}