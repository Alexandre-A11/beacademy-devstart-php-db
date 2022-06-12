<h1>Editar Produto</h1>

<?php
$product = $data['resultProduct']->fetch(\PDO::FETCH_ASSOC);
$category = $data['resultCategory'];
?>

<form action="" method="post">
    <label for="category">Categoria</label>
    <select name="category" id="category" class="form-select mb-3">
        <?php
        foreach ($category as $item) {
            $selected = $product['category_id'] === $item['id'] ? 'selected' : '';
            echo "<option value={$item['id']} {$selected}>{$item['name']}</option>";
        }
        ?>
    </select>

    <label for="name">Nome</label>
    <input id="name" name="name" type="text" class="form-control mb-3" value="<?= $product['name'] ?? "" ?>">

    <label for="description">Descrição</label>
    <textarea id="description" name="description" class="form-control mb-3"><?= $product['description'] ?? "" ?></textarea>

    <label for="price">Preço</label>
    <input id="price" name="price" type="text" class="form-control mb-3" value="<?= $product['price'] ?? "" ?>">

    <label for="quantity">Quantidade</label>
    <input id="quantity" name="quantity" type="text" class="form-control mb-3" value="<?= $product['quantity'] ?? "" ?>">

    <label for="photo">Foto</label>
    <input id="photo" name="photo" type="text" class="form-control mb-3" value="<?= $product['photo'] ?? "" ?>">

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>