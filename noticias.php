<?php
session_start();
?>
<?php
include 'conexion.php';

$sentencia= $db->query("SELECT * FROM noticia");

$noticias = $sentencia->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal de noticias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section style=" padding: 20px 40px;"class="main">
            <div class="nos">
            <h1>Últimas noticias:</h1>
            <?php
            foreach ($noticias as $n) { ?> 
            <h2 style="font-size: 30px; margin-top: 30px;"><?php  echo $n["titulo"] ?></h2>
            <p><?php  echo $n["contenido"] ?></p>
            <img src="<?php echo $n["imagen"] ?>" alt="" height="256" width="280" id="news">

            <?php } ?>
        
        </section>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>