<?php

namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\Etablissement;
use PDO;

class EtablissementRepository
{
    public static function getAllEtablissement(): array
    {
        $pdo = Database::getInstance()->getConnection();

        $sql = "
            SELECT
                id,
                nom
            FROM etablissements
            ORDER BY id DESC
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $etablissements = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $etablissements[] = new Etablissement(
                (int) $row['id'],
                $row['nom']
            );
        }

        return $etablissements;
    }
}