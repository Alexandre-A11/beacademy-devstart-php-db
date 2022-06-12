<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;
use Dompdf\Dompdf;

class ProductController extends AbstractController {
    public function listAction(): void {
        // include "../src/View/product/list.php";

        $connection = Connection::getConnection();
        $result = $connection->prepare('SELECT * FROM tb_product');
        $result->execute();

        parent::render("product/list", $result);
    }

    public function addAction(): void {
        // include "../src/View/product/add.php";
        $connection = Connection::getConnection();
        $result = $connection->prepare('SELECT * FROM tb_category');

        if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $photo = $_POST['photo'];
            $category = $_POST['category'];
            date_default_timezone_set('America/Sao_Paulo');
            $created_at = date('Y-m-d H:i:s');

            $query = "INSERT INTO tb_product (name, description, price, quantity, photo, category_id, created_at) 
            VALUES ('{$name}', '{$description}', '{$price}', '{$quantity}', '{$photo}', '{$category}', '{$created_at}');";

            $result = $connection->prepare($query);
        }

        $result->execute();

        ($_POST) ? parent::renderMessage("Produto cadastrado com sucesso!", parent::getPage()) : parent::render("product/add", $result);
    }

    public function deleteAction(): void {
        $id = $_GET['id'];

        $connection = Connection::getConnection();
        $query = "DELETE FROM tb_product WHERE id = {$id};";
        $result = $connection->prepare($query);
        $result->execute();

        parent::renderMessage("Produto excluído com sucesso!", parent::getPage());
    }

    public function editAction(): void {
        $id = $_GET['id'];

        $connection = Connection::getConnection();


        $queryCategory = "SELECT * FROM tb_category";
        $resultCategory = $connection->prepare($queryCategory);
        $resultCategory->execute();

        $query = "SELECT * FROM tb_product WHERE id = {$id}";

        if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $photo = $_POST['photo'];
            $category = $_POST['category'];
            date_default_timezone_set('America/Sao_Paulo');
            $created_at = date('Y-m-d H:i:s');

            $query = "UPDATE tb_product SET 
            name = '{$name}', 
            description = '{$description}', 
            price = '{$price}', 
            quantity = '{$quantity}', 
            photo = '{$photo}', 
            category_id = '{$category}', 
            created_at = '{$created_at}' 
            WHERE id = {$id};";
        }

        $result = $connection->prepare($query);
        $result->execute();

        if ($_POST) {
            parent::renderMessage("Produto atualizado com sucesso!", parent::getPage());
        } else {
            $data = [
                'resultProduct' => $result,
                'resultCategory' => $resultCategory->fetchAll(\PDO::FETCH_ASSOC)
            ];

            parent::render("product/edit", $data);
        }
    }

    public function reportAction(): void {
        $connection = Connection::getConnection();
        $query = "SELECT prod.id, prod.name, prod.quantity, cat.name as category 
        FROM tb_product prod INNER JOIN tb_category cat ON prod.category_id = cat.id";
        $result = $connection->prepare($query);
        $result->execute();

        $content = "";

        while ($product = $result->fetch(\PDO::FETCH_ASSOC)) {
            extract($product);
            $content .= "
            <tr>
                <td>{$id}</td>
                <td>{$name}</td>
                <td>{$quantity}</td>
                <td>{$category}</td>
            </tr>    
            ";
        }

        $html = "
        <h1>Relatório de Produtos</h1>
        <table border='1' width='100%'>
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                {$content}
            </tbody>
        </table>
        ";

        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->render();
        $pdf->stream();
    }
}
