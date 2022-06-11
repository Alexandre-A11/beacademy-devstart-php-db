<?php

ini_set("display_errors", 1);

include "../vendor/autoload.php";

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
/*
use App\Controller\CategoryController;
use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;

$url = explode("?", $_SERVER["REQUEST_URI"])[0];

function createRoute(string $controllerName, string $methodName) {
    return [
        "controller" => $controllerName,
        "method" => $methodName,
    ];
}

$routes = [
    "/" => createRoute(IndexController::class, "indexAction"),
    "/login" => createRoute(IndexController::class, "loginAction"),
    "/products" => createRoute(ProductController::class, "listAction"),
    "/products/new" => createRoute(ProductController::class, "addAction"),
    "/products/edit" => createRoute(ProductController::class, "editAction"),
    "/category" => createRoute(CategoryController::class, "listAction"),
    "/category/new" => createRoute(CategoryController::class, "addAction"),
    "/category/edit" => createRoute(CategoryController::class, "editAction"),
];

if (!isset($routes[$url])) {
    (new ErrorController)->notFoundAction();
    exit;
}

$controllerName = $routes[$url]["controller"];
$methodName = $routes[$url]["method"];

(new $controllerName())->$methodName();
*/
