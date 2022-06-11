<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class ClientController extends AbstractController {
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
            $password = password_hash($_POST["password"], PASSWORD_ARGON2I);
            date_default_timezone_set('America/Sao_Paulo');
            $created_at = date("Y-m-d H:i:s");

            $query = "INSERT INTO tb_client (name, email, cpf, password, created_at) VALUES ('{$name}', '{$email}', '{$cpf}', '{$password}', '{$created_at}');";
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
        $id = $_GET["id"];

        $query = "SELECT * FROM tb_client WHERE id = {$id};";
        $connection = Connection::getConnection();

        if ($_POST) {
            $getHash = "SELECT password FROM tb_client WHERE id = {$id};";
            $result = $connection->query($getHash);
            $result->execute();
            $hash = $result->fetchColumn();

            if (password_verify($_POST["old-password"], $hash)) {
                $newName = $_POST["name"];
                $newEmail = $_POST["email"];

                if ($_POST["password"] !== "") {
                    $newPassword = password_hash($_POST["password"], PASSWORD_ARGON2I);
                    $query = "UPDATE tb_client SET name = '{$newName}', email = '{$newEmail}', password = '{$newPassword}' WHERE id = {$id};";
                } else {
                    $query = "UPDATE tb_client SET name = '{$newName}', email = '{$newEmail}' WHERE id = {$id};";
                }

                echo "Cadastro atualizado com sucesso!";
            } else {
                echo "Senha atual incorreta!";
            }
        }

        $result = $connection->prepare($query);
        $result->execute();

        parent::render("client/edit", $result->fetch(\PDO::FETCH_ASSOC));
    }
}
