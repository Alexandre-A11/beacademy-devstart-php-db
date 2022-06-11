<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbstractController {
    public function listAction(): void {
        $connection = Connection::getConnection();
        $query = "SELECT * FROM tb_category;";
        $result = $connection->prepare($query);
        $result->execute();

        parent::render("category/list", $result);
    }

    public function addAction(): void {
        if ($_POST) {
            $name = $_POST["name"];
            $description = $_POST["description"];

            $query = "INSERT INTO tb_category (name, description) VALUES ('{$name}', '{$description}');";
            $connection = Connection::getConnection();
            $result = $connection->prepare($query);
            $result->execute();

            echo "Categoria cadastrada com sucesso!";
        }
        parent::render("category/add");
    }

    public function deleteAction(): void {
        $id = $_GET["id"];

        $query = "DELETE FROM tb_category WHERE id = {$id};";
        $connection = Connection::getConnection();
        $result = $connection->prepare($query);
        $result->execute();

        echo "Categoria excluída com sucesso!";
    }

    public function editAction(): void {
        $id = $_GET["id"];

        $query = "SELECT * FROM tb_category WHERE id = {$id};";
        $connection = Connection::getConnection();

        if ($_POST) {
            $newName = $_POST["name"];
            $newDescription = $_POST["description"];

            $query = "UPDATE tb_category SET name = '{$newName}', description = '{$newDescription}' WHERE id = {$id};";
        }

        $result = $connection->prepare($query);
        $result->execute();

        if ($_POST) {
            echo "Categoria alterada com sucesso!";
        }

        parent::render("category/edit", $result->fetch(\PDO::FETCH_ASSOC));
    }
}
