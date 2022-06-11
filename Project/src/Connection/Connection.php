<?php

declare(strict_types=1);

namespace App\Connection;

abstract class Connection {
    public static function getConnection(): \PDO {
        $database = "db_store";
        $username = "root";
        $password = "";
        $dsn = "mysql:host=127.0.0.1;dbname=";

        return new \PDO($dsn . $database, $username, $password);
    }
};
