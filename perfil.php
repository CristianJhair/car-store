<?php
session_start();
include 'bloquear.php';
?>
<?php
include 'validacion.php';
?>
<?php

 $correo=$_SESSION["correo"];

 include 'conexion.php';

 $sentencia= oci_parse($db,"SELECT * FROM cliente where EMAIL='$correo'");
 oci_execute($sentencia);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="prefix.js"></script>
    <title>Mi perfil</title>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        
        <section class="main">
        
        <form action="editar_usuario.php" method="post" class="form-register">
            <h2 class="form__titulo">MI PERFIL</h2>
            <div class="contenedor-inputs">
                <?php while(($u = oci_fetch_assoc($sentencia))!=false){ ?>
                <label>Nombres:   </label><label id="datosp"for=""><?php echo $u["NOMBRE"]?></label>
                <label>Apellidos:   </label><label id="datosp"for=""><?php echo $u["APELLIDO"]?></label>
                <label>Correo:    </label><label id="datosp"for=""><?php echo $u["EMAIL"] ?></label>
                <input type="hidden" name="id" value="<?php echo $u["CLIENTE_ID"] ?>">
                <input type="submit" class="btn-enviar" value="EDITAR">
                <?php } ?>
            </div>
        </form>
            
        </section>
        
        <?php include 'footer.php' ?>
    </div>
</body>
</html>