<?php
session_start();
include 'bloquear.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de reclamo</title>
</head>

<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main">
                <form action="procesar_contacto.php" method="post"  class="form-register">
                <h2 class="form__titulo">CONTÁCTATE CON NOSOTROS</h2>
                <div class="contenedor-inputs">
                    <?php if(isset($_GET["error3"])) { ?>
                        <p style= "color:red ;">Debe llenar todos los campos para poder validar su reclamo.</p>
                    <?php } ?>
                    
                    <label for="" class="label-100">Nombre:<?php echo $_SESSION["nombres"] ?></label>  
                    <label for="" class="label-100">Apellidos: <?php echo $_SESSION["apellidos"] ?></label>   
 
                    <label for="" class="label-100">Correo:  <?php echo $_SESSION["correo"] ?></label>

                    
                    <label class="label-48">Nombre del cubo: </label>
                    
                    <input type="text" name="asunto" placeholder="Asunto" class="input-100">
                    <textarea name="mensaje" cols="30" rows="10" class="input-100" placeholder="Mensaje"></textarea>
                    <input type="submit" value="ENVIAR" class="btn-enviar">
                </div>
                </form>
            </div>
        </section>
        <?php include 'footer.php' ?>
    </div>   
</body>
</html>