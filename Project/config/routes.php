<?php

declare(strict_types=1);

use App\Controller\CategoryController;
use App\Controller\ClientController;
use App\Controller\IndexController;
use App\Controller\ProductController;

function createRoute(string $controllerName, string $methodName) {
    return [
        "controller" => $controllerName,
        "method" => $methodName,
    ];
}

$routes = [
    "/" => createRoute(IndexController::class, "indexAction"),
    "/login" => createRoute(IndexController::class, "loginAction"),
    "/client" => createRoute(ClientController::class, "listAction"),
    "/client/new" => createRoute(ClientController::class, "addAction"),
    "/client/edit" => createRoute(ClientController::class, "editAction"),
    "/client/delete" => createRoute(ClientController::class, "deleteAction"),
    "/product" => createRoute(ProductController::class, "listAction"),
    "/product/new" => createRoute(ProductController::class, "addAction"),
    "/product/edit" => createRoute(ProductController::class, "editAction"),
    "/product/delete" => createRoute(ProductController::class, "deleteAction"),
    "/category" => createRoute(CategoryController::class, "listAction"),
    "/category/new" => createRoute(CategoryController::class, "addAction"),
    "/category/edit" => createRoute(CategoryController::class, "editAction"),
    "/category/delete" => createRoute(CategoryController::class, "deleteAction"),
];

return $routes;
