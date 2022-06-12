<h1>Clientes</h1>

<div class="mb-3 text-end">
    <a href="/client/new" class="btn btn-outline-primary">Cadastrar Cliente</a>
</div>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($client = $data->fetch(\PDO::FETCH_ASSOC)) : ?>
            <?php extract($client) ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $name ?></td>
                <td><?= $email ?></td>
                <td><?= $cpf ?></td>
                <td><?= $created_at ?></td>
                <td>
                    <a href="/client/edit?id=<?= $id ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/client/delete?id=<?= $id ?>" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>