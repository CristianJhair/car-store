<?php
session_start();
include 'bloquear.php';
?>

<?php
 include 'conexion.php';
 $sentencia= $db->query("SELECT * FROM promociones");

 $p = $sentencia->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="prefix.js"></script>
    <title>Promociones</title>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        
        <section class="main">
        <h1>Promociones</h1>
        <?php foreach ($p as $n){ ?>
        <div class="prod">
                <div class="imagen"><img src="<?php echo $n["imagen"] ?>" alt="" height="256" width="280"></div>
                <div class="nombrep"><?php echo $n["nombre"] ?></div>

                <div class="comprar">
                    <p class="precio">S/ <?php echo $n["precio rebajado"] ?> </p> 
                    <p class="puntos"> + <?php echo $n["puntos"] ?>puntos </p>
                    <p class="precioa"> <s>S/ <?php echo $n["precio actual"] ?></s></p>
                    <form action="exclusiva.php" method="get" >
                        <input type="hidden" name="id" value="<?php echo $n["id"] ?>" >
                    
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