<h1>Editar Categoria</h1>

<form action="" method="POST">
    <label for="name">Nome</label>
    <input id="name" name="name" type="text" class="form-control mb-3" value="<?php echo $data['name'] ?? "" ?>">

    <label for="description">Descrição</label>
    <textarea id="description" name="description" type="text" class="form-control mb-3"><?php echo $data['description'] ?? "" ?></textarea>

    <button class="btn btn-primary">Atualizar</button>
</form>