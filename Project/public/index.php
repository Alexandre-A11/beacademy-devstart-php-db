<?php

ini_set("display_errors", 1);

include "../vendor/autoload.php";

use App\Controller\ErrorController;
/*
$database = "db_store";
$username = "root";
$password = "";

// $dsn = 'mysql:host=127.0.0.1;port=3306;charset=utf8;dbname=';
// $dsn = 'mysql:host=127.0.0.1;dbname=';
// $connection = new PDO($dsn . $database, $username, $password);

use App\Connection\Connection;

$connection = Connection::getConnection();

$query = "SELECT * FROM tb_category;";

$preparation = $connection->prepare($query);
$preparation->execute();

var_dump($preparation);

while ($registry = $preparation->fetch()) {
    var_dump($registry);
}
*/

$url = explode("?", $_SERVER["REQUEST_URI"])[0];

$routes = include "../config/routes.php";

if (!isset($routes[$url])) {
    (new ErrorController)->notFoundAction();
    exit;
}

$controllerName = $routes[$url]["controller"];
$methodName = $routes[$url]["method"];

(new $controllerName())->$methodName();
