<h1>Atualizar Cadastro</h1>

<form action="" method="POST">
    <label for="name">Nome</label>
    <input id="name" name="name" type="text" class="form-control mb-3" value="<?php echo $data['name'] ?? "" ?>">

    <label for=" email">Email</label>
    <input id="email" name="email" type="text" class="form-control mb-3" value="<?php echo $data['email'] ?? "" ?>">

    <label for="old-password">Senha atual</label>
    <input id="old-password" name="old-password" type="text" class="form-control mb-3" required>

    <label for="password">Nova Senha</label>
    <input id="password" name="password" type="password" class="form-control mb-3">

    <button class="btn btn-primary">Atualizar</button>
</form>