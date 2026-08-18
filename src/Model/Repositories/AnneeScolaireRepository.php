<?php

namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\AnneeScolaire;
use PDO;

class AnneeScolaireRepository
{
    public static function getAllAnneeScolaire(): array
    {
        $pdo = Database::getInstance()->getConnection();

        $sql = "
            SELECT
                id,
                annee
            FROM annees_scolaires
            ORDER BY id DESC
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $annees = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $annees[] = new AnneeScolaire(
                (int) $row['id'],
                $row['annee'],
                []
            );
        }

        return $annees;
    }
}