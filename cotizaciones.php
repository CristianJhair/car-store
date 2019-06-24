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
    <script src="prefix.js"></script>
    
    <title>Promociones</title>
</head>
<body>
<div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main1">
            <h2 class="h2">Lista de cotizaciones realizadas</h2>
            <a type="submit" href="registro_cotizacion.php" id="button-table">Añadir cotización</a>
            <table class="tabla">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
            
        </section>
    
        <?php include 'footer.php' ?>
    </div>
</body>
</html>