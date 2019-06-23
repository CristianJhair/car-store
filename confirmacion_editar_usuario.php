<?php
session_start();
include 'bloquear.php';
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
    <title>Editar perfil</title>
    
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php'?>
        <h1>Perfil de <?php echo $u["nombres"] ?>    <?php echo $u["apellidos"] ?></h1>
        <section class="main">
            
            <div>
            <p>Su perfil fue editado correctamente. </p>
            </div>
            
        </section>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>