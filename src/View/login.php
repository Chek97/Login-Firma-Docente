<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Firma Docente</title>
    <?php require('./shared/header.php'); ?>
</head>
<body>
    <div class="container d-flex flex-column">
        <header>
            <h1>LOGIN FIRMA DOCENTE</h1>
        </header>
        <form action="">
            <div class="input-group">
                <input type="email" placeholder="Correo Electronico" class="form-control">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Contraseña" class="form-control">
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