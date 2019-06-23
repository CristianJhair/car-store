<?php
session_start();
?>

<?php

 include 'conexion.php';
 $sentencia= $db->query("SELECT * FROM productos WHERE tipo='cuboide' ");

 $cuboides = $sentencia->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="prefix.js"></script>
    <title>Cuboides</title>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main">
        <h1>Cuboides</h1>
        <?php foreach ($cuboides as $a){ ?>
        <div class="prod">
                <div class="imagen"><img src="<?php echo $a["imagen"] ?>" alt="" height="256" width="280"></div>
                <div class="nombrep"><?php echo $a["nombre"] ?></div>

                <div class="comprar">
                    <div class="precio"> <p> S/ <?php echo $a["precio"] ?> </p></div>
                    <form action="comprar.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $a["id"] ?>" >
                    <button type="submit" id="comprar">Comprar</button>
                    </form>
                </div>
        </div>
        <?php } ?>
        
        </section>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>