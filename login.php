<?php
    require_once "./app/config/dependencias/dependencias.php";
    require_once "./app/controller/login.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="<?=CSS.'login-style.css';?>">
    </head>
<body>
    <div class="container">
        <div class="row justify-content-end mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Iniciar Sesión</h4>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="loginEmail">Correo electrónico:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="loginPassword">Contraseña:</label>
                                <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                
                                <br>
                                <br>
                                <a href="registro.php" class="btn btn-dark">Registrarse</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
