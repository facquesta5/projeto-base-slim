<?php

namespace App\Services;

use App\Config\Database;

class IndexService
{
    public function getMessage(): string
    {
        return "Hello, Slim Framework with Clean Architecture!";
    }

    public function fetchData()
    {
        $connection = Database::getConnection();

        $query = $connection->prepare("SELECT * FROM users");
        $query->execute();

        return $query->fetchAll();
    }
}
