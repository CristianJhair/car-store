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
            <h1 style="font-size: 40px;">Cubo Rubik 2x2</h1>
            <p>¿Te gustaría saber como hacer el cubo de rubik 2×2? Normalmente lo vemos tan pequeño y con tan pocas piezas que 
                pensamos que es muy sencillo (y realmente lo es); pero necesitas conocer algunos pasos para poder finalizarlo con
                 éxito.
            </p>
            <p>En este tutorial aprenderemos de una forma fácil a realizar el cubo 2×2. Si ya sabes resolver el cubo de rubik 3×3 te resultará
                 muy sencillo, sino, no te preocupes, veremos paso a paso cómo resolverlo.</p>         
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/JkXk4nRhRTU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; 
            gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        <div class="nos">
            <h1 style="font-size: 40px;">Cubo Rubik 3x3</h1>
            <p>¿Siempre te ha parecido muy complicado el cubo 3×3? En este tutorial vamos a intentar explicarte paso a paso cómo hacer el cubo de rubik 3×3. 
                ¿Sabías que tiene más de 43 trillones de combinaciones? Que esto no te asuste, vamos a utilizar un sencillo método 
                que va a hacer que te resulte fácil armarlo. Te parecerá que estás utilizando un truco para resolverlo ;D.
            </p>

        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/WgrmLplKB9c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; 
            gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/aavZ80zdXzk" frameborder="0" allow="accelerometer; autoplay; encrypted-media;
            gyroscope; picture-in-picture" allowfullscreen></iframe>
            
        <div class="nos">
            <h1 style="font-size: 40px;">Cubo Rubik 4x4</h1>
            <p>¿Como hacer el Cubo de Rubik 4×4? Seguro alguna vez te has preguntado cómo se resuelve un cubo 4×4. En este tutorial te lo vamos a explicar 
                paso a paso pero, para ello, es necesario que hayas aprendido primero a hacer el cubo de rubik 3×3. Si necesitas ayuda puedes echar un 
                vistazo a nuestro tutorial.
            </p>
            <p>Para llegar a la solución de este cubo vamos a utilizar el método de reducción, es decir, reduciremos el 
                4×4 en un 3×3. Para ello, primero haremos los centros, después las aristas y, una vez llegados a este 
                punto, resolveremos las esquinas como en un 3×3. Sin embargo, nos encontraremos con nuevos problemas, 
                como las paridades, pero tranquil@, con nuestra ayuda lo solucionarás sin problemas.
                Empezamos!</p>
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/cDiyf3GyLoM" frameborder="0" allow="accelerometer; autoplay; encrypted-media;
             gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>

        <?php include 'footer.php' ?>
    </div>
</body>
</html>