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

 $sentencia= $db->query("SELECT * FROM usuario where correo='$correo'");

 $u = $sentencia->fetch();

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
        
        <form action="editar_usuario.php" method="get" class="form-register">
            <h2 class="form__titulo">MI PERFIL</h2>
            <div class="contenedor-inputs">
                
                <label for="">Nombres:   </label><label id="datosp"for=""><?php echo $u["nombres"]?></label>
                <label for="">Apellidos:   </label><label id="datosp"for=""><?php echo $u["apellidos"]?></label>
                <label for="">Correo:    </label><label id="datosp"for=""><?php echo $u["correo"] ?></label>
                <label for="">Fecha de nacimiento:    </label><label id="datosp"for=""><?php echo $u["fecha_nacimiento"] ?></label>
                <label for="">Telefono:   </label><label id="datosp"for=""><?php echo $u["telefono"]?></label>
                <label for="">DNI:     </label><label id="datosp"for=""><?php echo $u["dni"]?></label>
                <label for="">Numero de cuenta:   </label><label id="datosp"for=""><?php echo $u["numero de cuenta"]?></label>
                <input type="hidden" name="id" value="<?php echo $u["id"] ?>">
                <input type="submit" class="btn-enviar" value="EDITAR">
            </div>
        </form>
            
        </section>
        
        <?php include 'footer.php' ?>
    </div>
</body>
</html>