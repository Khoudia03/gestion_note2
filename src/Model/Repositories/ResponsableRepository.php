<?php

namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\Responsable;
use PDO;

class ResponsableRepository
{
    public static function getAllResponsable(): array
    {
        $pdo = Database::getInstance()->getConnection();

        $sql = "
            SELECT
                id,
                nom,
                prenom,
                numero,
                adresse
            FROM responsables
            ORDER BY id DESC
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $responsables = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $responsables[] = new Responsable(
                (int) $row['id'],
                $row['nom'],
                $row['prenom'],
                $row['numero'],
                $row['adresse']
            );
        }

        return $responsables;
    }
}