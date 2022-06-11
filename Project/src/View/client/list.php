<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<h1>Clientes</h1>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>CPF</th>
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
                <td>
                    <a href="/client/edit?id<?= $id ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/client/delete?id<?= $id ?>" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>