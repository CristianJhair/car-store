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
        <section class="main">
        <h1>Tutoriales</h1>
        <div class="nos">
            <h1 style="font-size: 40px;">Notación Cubo de Rubik</h1>
            <p>En este artículo vamos a aprender la notación para el Cubo de Rubik 3×3, 2×2 y 4×4. Esas letras que aparecen
                 en las aplicaciones que usaremos para cronometrarnos en las que vemos una L, un R, una U… son notación, tienen 
                 su significado y son imprescindibles para aprender nuevos métodos.
            </p>
            <p>Por lo tanto en este tutorial aprenderemos qué significan éstas letras, veremos que es algo muy sencillo y se 
                trata de práctica y lógica. ¡Empecemos!</p>         
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/aN4HO9WVYOY" frameborder="0" allow="accelerometer; 
            autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>