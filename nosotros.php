<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="prefix.js"></script>
    <title>Bienvenido a MARKETCUBE</title>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <h1>Nosotros</h1>
        <section class="main">
        <div class="nos">
            <h2 style="font-size: 35px;">MARKETCUBE A TU SERVICIO :)</h2>
            <p>Somos un minimarket independiente, dedicado a la venta de productos de Cubos Rubick, puzzles y
            relacionados. La mayoría de nuestros productos son de las marcas mundialmente reconocidas en el mundo de los cubos.
            Además de los cubos, te ofrecemos productos relacionados al mundo de los puzzles, como mochilas, accesorios tecnológicos, 
            u otros ítems personales que engrandecerá tu espíritu cubero. 
            </p>
            <p>Por ello, empieza ya y navega por todo nuestro sitio web, si quieres comprar un cubo en especial, está la Tienda, si 
            tienes dudas de como armar un cubo u otro puzzle, tenemos tutoriales, si buscas promociones, ofertas u novedades, también
            las podrás encontrar en nuestra barra de menú. No esperes más y experimenta todo acerca de los cubos Rubick aquí en MarketCube</p>         
        </div>
        </section>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>