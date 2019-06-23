<?php
session_start();
include 'bloquear.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Contacto exitoso</title>
    
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php'?>
        
        <section class="main">
            <div>
                <h1>Formulario de contacto</h1>
                <p style="text-align: center; margin: auto;">Gracias por contactarse con nosotros,atenderemos su consulta.</p>
            </div>
        </section>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>
