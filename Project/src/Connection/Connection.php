<?php

declare(strict_types=1);

namespace App\Connection;

abstract class Connection {
    public static function getConnection(): \PDO {
        $database = "db_store";
        $username = "root";
        $password = "root";
        // $dsn = 'mysql:host=127.0.0.1;port=3306;charset=utf8;dbname=';
        $dsn = "mysql:host=127.0.0.1:3306;charset=utf8;dbname=";

        return new \PDO($dsn . $database, $username, $password);
    }
};
