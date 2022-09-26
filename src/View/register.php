<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Firma Docente | Registro</title>
    <?php require('./shared/header.php'); ?>
</head>
<body>
    <div class="container d-flex flex-column">
        <header>
            <h2>Registro de Usuario</h2>
        </header>
        <form action="../Controller/UserController.php?a=create" enctype="multipart/form-data" method="POST">
            <div class="input-group">
                <input type="text" name="name" placeholder="Nombre" class="form-control">
            </div>
            <div class="input-group">
                <input type="text" name="last_name" placeholder="Apellido" class="form-control">
            </div>
            <div class="input-group">
                <input type="text" name="username" placeholder="Usuario" class="form-control">
            </div>
            <div class="input-group">
                <input type="email" placeholder="Correo Electronico" class="form-control">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Contraseña" class="form-control">
            </div>
            <div class="input-group">
                <input type="file" class="form-control">
            </div>
            <div class="mb-2">
                <button class="btn btn-block btn-primary">Iniciar Sesion</button>
            </div>
            <p>¿Aun no tienes una cuenta? <a href="../Router/router.php?q=<?php echo('register'); ?>">Registrate Aqui</a></p>
        </form>
    </div>
    <?php require('./shared/footer.php'); ?>
</body>
</html>