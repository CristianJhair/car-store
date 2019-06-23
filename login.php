<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Iniciar Sessión:</title>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main">
                <form action="procesar_login.php" method="post" class="form-register">
                    <h2 class="form__titulo">INICIA SESION</h2>
                    <div class="contenedor-inputs">
                        <?php if(isset($_GET["error2"])){ ?>
                            <p style="color:red">Datos Incorrectos</p>
                        <?php } ?>
                        <?php if(isset($_GET["error3"])) { ?>
                            <p style= "color:red ; font-size: 23px"  >Debe iniciar sesión antes de comprar.</p>
                        <?php } ?>
                        <input type="email" name="correo" placeholder="Correo" class="input-100">
                        <input type="password" name="contraseña" placeholder="Contraseña" class="input-100">
                        <input type="submit" value="Iniciar Sesion" class="btn-enviar">
                        <p class="form__link">¿No tienes una cuenta aún?<a href="registro.php" >Ingresa aquí</a></p>
                    </div>
                </form>
        </section>
        <?php include 'footer.php'?>
    </div>
</body>
</html>
