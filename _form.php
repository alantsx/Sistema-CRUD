<div class="container">
    <div class="card">
        <div class="card-header">
                <h3>
                        <?php if ($user['id']): ?>
                        Editar Usuário: <b><?php echo $user['nome']?></b>
                        <?php else: ?>
                        <b>Novo Usuário</b>
                        <?php endif ?>
                </h3>             
        </div>
        <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="">
                <div class="form-group">
                        <label>Nome</label>
                        <input name="nome" value="<?php echo $user['nome'] ?>" class="form-control">
                </div>
                <div class="form-group">
                        <label>Email</label>
                        <input name="email" value="<?php echo $user['email'] ?>" class="form-control">
                </div>
                <div class="form-group">
                        <label>Senha</label>
                        <input name="senha" value="<?php echo $user['senha'] ?>" class="form-control">
                </div>
                <button class="btn btn-success">Enviar</button>
                </form>
        </div>
    </div>    
</div>