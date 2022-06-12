<h1>Listar Produtos</h1>

<div class="mb-3 text-end">
    <a href="/product/new" class="btn btn-outline-primary">Novo Produto</a>
    <a href="/product/relatory" class="btn btn-dark">Gerar PDF</a>
</div>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr class="text-center">
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Data de Registro</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($product = $data->fetch(\PDO::FETCH_ASSOC)) : ?>
            <?php extract($product); ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $name ?></td>
                <td><?= $description ?></td>
                <td><img src="<?= $photo ?>" alt="<?= $name ?>" width="100"></td>
                <td>R$ <?= $price ?></td>
                <td><?= $quantity ?></td>
                <td><?= $created_at ?></td>
                <td style="width: 9rem">
                    <a href="/product/edit?id=<?= $id ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/product/delete?id=<?= $id ?>" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>