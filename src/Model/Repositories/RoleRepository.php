<?php

namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\Role;
use PDO;

class RoleRepository
{
    public static function getAllRole(): array
    {
        $pdo = Database::getInstance()->getConnection();

        $sql = "
            SELECT
                id,
                nom_role
            FROM roles
            ORDER BY id
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $roles = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $roles[] = new Role(
                (int) $row['id'],
                $row['nom_role']
            );
        }

        return $roles;
    }
}C