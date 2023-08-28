<?php

namespace App\Models;

use PDO;

class Example extends AbstractModel
{

    public function get(int $id): array|bool
    {
        $query = $this->pdo->prepare('SELECT * FROM example WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll(): array|bool
    {
        $query = $this->pdo->prepare('SELECT * FROM example');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(string $var): bool
    {
        $query = $this->pdo->prepare('INSERT INTO example (var) VALUES (:var)');
        $query->bindParam(':var', $var);
        return $query->execute();
    }

    public function delete(int $id): bool
    {
        $query = $this->pdo->prepare('DELETE FROM example WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        return $query->execute();
    }

}