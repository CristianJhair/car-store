<?php
session_start();
include 'bloquear.php';
$id = intval($_GET["id"]);
include 'conexion.php';
$stmt= $db->query("SELECT * FROM productos where id='$id'");
$u = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Compra de Promoción exitosa</title>
    
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php'?>
        <h1>Comprar Promoción <?php echo $u["nombre"] ?></h1>
        <section class="main">
            
            <div>
            <p>Compra registrada exitosamente</p>
            </div>
            
        </section>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>
