<?php
require __DIR__.'/usuarios/users.php';

$users = getUsers();

include 'partials/header.php';
?>

<div class="container">
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th><a style="margin: 0px 0px 0px;" type="button" href="incluir.php" class="btn btn-sm btn-outline-primary">Novo Usuário    </a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td> <?php echo $user['nome'] ?></td>
                        <td> <?php echo $user['email'] ?></td>
                        <td> <?php echo $user['senha'] ?></td>
                        <td>
                            <a type="button" href="visualizar.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">Visualizar   </a>
                            <a type="button" href="editar.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Editar</a>
                            <form style="display: inline-block" method="POST" action="deletar.php">
                                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                                <button onclick="return confirm('Confirmar?')" class="btn btn-sm btn-outline-danger">Deletar</button>
                            </form>
                    </tr>
                <?php endforeach; ; ?>
            </tbody>
        </table>
    </div>
</div>
 
<?php include 'partials/footer.php'; ?>