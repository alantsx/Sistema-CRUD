<?php
include 'partials/header.php';
require __DIR__.'/usuarios/users.php';

    if(!isset ($_GET['id'])) {
        include 'partials/not_found.php';
        exit;
    }

$userId = $_GET['id'];

$user = getUserById($userId);
    if (!$user) {
        include 'partials/not_found.php';
        exit;
    }
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Visualizar Informações: <b><?php echo $user['nome'] ?></h3>
        </div>
    <table class="table">
        <tbody>
        <tr>    
                <th>Nome</th>
                <td><?php echo $user['nome'] ?></td>
            </tr>        <tr>    
                <th>Email</th>
                <td><?php echo $user['email'] ?></td>
            </tr>        <tr>    
                <th>Senha</th>
                <td><?php echo $user['senha'] ?></td>
            </tr>
        </tbody>
    </table>
    </div>
    <div class="card-body">
    <a type="button" href="editar.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Editar</a>
            <form style="display: inline-block" method="POST" action="deletar.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button onclick="return confirm('Confirmar?')" class="btn btn-sm btn-outline-danger">Deletar</button>
            </form>
    </div>
</div>

<?php include 'partials/footer.php'; ?>