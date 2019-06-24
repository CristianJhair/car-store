<?php
session_start();
include 'bloquear.php';
?>
<?php
$id = $_POST["id"];
include 'conexion.php';

$stmt= oci_parse($db,"SELECT * FROM cliente where cliente_id='$id'");
oci_execute($stmt);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="prefix.js"></script>
    <title>Editar perfil</title>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main">
            <form action="procesar_editar_usuario.php" method="post" class="form-register">
                    <h2 class="form__titulo">EDITA TU PERFIL</h2>
                    <div class="contenedor-inputs">
                        <input type="hidden" name="id" value="<?php echo $u["id"] ?>" >
                        <?php if(isset($_GET["error1"])) { ?>
                            <p style= "color:red ;">Confirme correctamente su contraseña.</p>
                        <?php } ?>
                        <?php if(isset($_GET["error2"])) { ?>
                            <p style= "color:red ;">Debe completar todos sus datos.</p>
                        <?php } ?>
                        
                        <?php while(($u = oci_fetch_assoc($stmt))!=false){ ?>
                        <input type="text" name="nombre" placeholder="Nombre completo" class="input-48" required value="<?php echo $u["NOMBRE"] ?>">
                        <input type="text" name="apellidos" placeholder="Apellidos" class="input-48" required value="<?php echo $u["APELLIDO"] ?>">
                        <input type="text" name="direccion" placeholder="Direccion " class="input-100" required value="<?php echo $u["DIRECCION"] ?>">
                        <input type="email" name="correo" placeholder="Correo " class="input-100" required value="<?php echo $u["EMAIL"] ?>">
                        <input type="text" name="usuario" placeholder="Usuario " class="input-100" required value="<?php echo $u["USUARIO"] ?>">
                        <input type="password" name="contraseña" placeholder="Contraseña" class="input-48" required >
                        <input type="password" name="recontraseña" placeholder="Confirmar contraseña" class="input-48" required >
                        <input type="submit" class="btn-enviar" value="CONFIRMAR">
                        <?php } ?>
                    </div>
            </form>
        </section>
        
        <?php include 'footer.php' ?>
    </div>
</body>
</html>





