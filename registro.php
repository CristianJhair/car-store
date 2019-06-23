<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Crear cuenta</title>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main">
            <form action="Procesar_registro.php" method="post" class="form-register">
                <h2 class="form__titulo">CREA UNA CUENTA</h2>
                <?php if(isset($_GET["error1"])) { ?>
                    <p style= "color:red ;">Confirme correctamente su contraseña o debe llenar los espacios en blanco.</p>
                <?php } ?>
                <?php if(isset($_GET["error2"])) { ?>
                    <p style= "color:red ; padding: 5px; text-align:center;">Debe completar todos sus datos o ya existe ese correo/DNI/Número de cuenta.</p>
                <?php } ?>
                <div class="contenedor-inputs">
                    <input type="text" name="nombre" placeholder="Nombre completo"
                    class="input-48">
                    <input type="text" name="apellidos" placeholder="Apellidos"
                    class="input-48">
                    <input type="email" name="correo" placeholder="Correo " class="input-100">
                    <input type="date" name="fecha" class="input-48">
                    <input type="text" name="telefono" placeholder="Teléfono" maxlength="15"
                    class="input-48">
                    <input type="text" name="dni" placeholder="DNI" maxlength="8" class="input-100">
                    <input type="text" name="numcuenta" placeholder=" Número de cuenta" maxlength="13"
                    class="input-100">
                    <input type="password" name="contraseña" placeholder="Contraseña" class="input-100">
                    <input type="password" name="recontraseña" placeholder="Confirmar contraseña"
                    class="input-100">
                    <input type="submit" value="CREAR CUENTA" class="btn-enviar">
                    <p class="form__link">¿Ya tienes cuenta?<a href="login.php">Ingresa aquí</a></p>
                </div>
            </form>
        </section>
        <?php include 'footer.php'?>
    </div>
   
    
</body>
</html>