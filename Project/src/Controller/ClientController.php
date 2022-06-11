<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class ClienteController extends AbstractController {
    public function listAction(): void {
        $connection = Connection::getConnection();
        $query = "SELECT * FROM tb_client;";
        $result = $connection->prepare($query);
        $result->execute();

        parent::render("client/list", $result);
    }

    public function addAction(): void {
        if ($_POST) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];

            $query = "INSERT INTO tb_client (name, email, cpf) VALUES ('{$name}', '{$email}', '{$cpf}');";
            $connection = Connection::getConnection();
            $result = $connection->prepare($query);
            $result->execute();

            echo "Cliente cadastrado com sucesso!";
        }
        parent::render("client/add");
    }

    public function deleteAction(): void {
        $id = $_GET["id"];

        $query = "DELETE FROM tb_client WHERE id = {$id};";
        $connection = Connection::getConnection();
        $result = $connection->prepare($query);
        $result->execute();

        echo "Cliente excluído com sucesso!";
    }

    public function editAction(): void {
    }
}
