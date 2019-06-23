<?php
session_start();
include 'bloquear.php';
?>
<?php
$id = intval($_GET["id"]);
include 'conexion.php';

$stmt= $db->query("SELECT * FROM usuario where id='$id'");

$u = $stmt->fetch();

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
                    
                    <input type="email" name="correo" placeholder="Correo" class="input-100">
                    <input type="date" name="fecha" class="input-48">
                    <input type="text" name="telef" placeholder="Teléfono" maxlength="15" class="input-48"> 
                    <input type="password" name="p1" placeholder="Contraseña actual/nueva" class="input-100">
                    <input type="password" name="p2" placeholder="Confirmacion contraseña actual/nueva" class="input-100" >
                    <input type="submit" class="btn-enviar" value="CONFIRMAR">
                    </div>
            </form>
        </section>
        
        <?php include 'footer.php' ?>
    </div>
</body>
</html>





