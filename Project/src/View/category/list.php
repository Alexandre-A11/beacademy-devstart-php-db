<h1>Listar Categoria</h1>

<div class="mb-3 text-end">
    <a href="/category/new" class="btn btn-outline-primary">Criar Categoria</a>
</div>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($category = $data->fetch(\PDO::FETCH_ASSOC)) : ?>
            <?php extract($category) ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $name ?></td>
                <td><?= $description ?></td>
                <td>
                    <a href="/category/edit?id=<?= $id ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/category/delete?id=<?= $id ?>" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>