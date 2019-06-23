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
            <h1 style="font-size: 40px;">Resolviendo el Piramynx</h1>
            <p>El pyraminx es uno de los primeros cubos que nos llaman la atención una vez que sabemos realizar 
                el cubo de rubik. Bien sea por su forma, por su número de piezas… este rompecabezas en forma piramidal
                 nos encanta a todos.
            </p>
            <p>
                Pyraminx es una categoría oficial de la WCA, por lo que se compite en los torneos oficiales. 
                El single mundial del pyraminx es de algo más de 1 segundo y la media de 2 segundos. Nosotros te 
                enseñaremos a dar tus primeros pasos con el pyraminx, quizás en unos años tú estés entre los primeros
                 del ranking.
            </p>
            <p>Para comenzar deberemos saber que el Pyraminx es un tetraedro, una pirámide de cuatro caras triangulares.
                 Está formado por piezas móviles diferentes entre sí.</p>         
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/i5sOJqJbGME" frameborder="0" allow="accelerometer; autoplay; encrypted-media;
             gyroscope; picture-in-picture" allowfullscreen></iframe>
        
             <div class="nos">
            <h1 style="font-size: 40px;">Resolviendo el Megamynx</h1>
            <p>
            Cuando te adentras un poco en el mundo de los cubos de rubik, comienzas a ver la gran variedad de 
            rompecabezas de los que se compone y… ¡vaya, existen muchos más a parte del clásico rubik 3×3! 
            En este tutorial vamos a aprender a resolver el Megaminx.
            </p>
            <p>
            El megaminx es como un 3×3 pero extrapolado a un dodecaedro. Para resolver un megaminx será necesario 
            que previamente sepas hacer un cubo de rubik 3×3. Si todavía no sabes, aquí te dejamos el tutorial 
            sobre cómo resolver el cubo de rubik 3×3.
            </p>
            <p>
                En este tutorial, aprenderemos a hacer el megaminx de una forma muy parecida a un cubo 3×3.
                ¡Empezamos!
            </p>
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tayp32UTNCI" frameborder="0" allow="accelerometer; 
            autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>

        <?php include 'footer.php' ?>
    </div>
</body>
</html>