<?php
session_start();
?>

<?php
 include 'conexion.php';
 $sentencia= $db->query("SELECT * FROM productos WHERE tipo='minx'");

 $minx = $sentencia->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="prefix.js"></script>
    <title>Cubos Minx</title>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main">
        <h1>Cubos Rubik Minx</h1>
        <?php foreach ($minx as $n){ ?>
        <div class="prod">
                <div class="imagen"><img src="<?php echo $n["imagen"] ?>" alt="" height="256" width="280"></div>
                <div class="nombrep"><?php echo $n["nombre"] ?></div>
                <div class="comprar">
                    <div class="precio"> <p> S/ <?php echo $n["precio"] ?> </p></div>
                    <form action="comprar.php" method="get" class=>
                    <input type="hidden" name="id" value="<?php echo $n["id"] ?>" >
                    <button id="comprar" type="submit">Comprar</button>
                    </form>
                </div>
        </div>
        <?php } ?>
        </section>
    
        <?php include 'footer.php' ?>
    </div>
</body>
</html>