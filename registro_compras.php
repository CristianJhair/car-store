<?php
session_start();
include 'bloquear.php';
?>

<?php

include 'conexion.php';

$nom = $_SESSION["nombres"];
$ap = $_SESSION["apellidos"];

$sentencia= $db->query("SELECT * FROM compras where nombreCli='$nom' and apellidoCli='$ap'");


$com = $sentencia->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de compras</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
            <?php include 'cabecera.php' ?>
            
            <h1>Registro de compras</h1>
            <section class="main">
                <table class="tabla">
                    <tr>
                        <th>Nombre del Producto</th>
                        
                        <th>Tipo</th>
                        
                        <th>Precio Unitario</th>
                        
                        <th>Fecha de compra</th>
                        
                        <th>Cantidad</th>
                        
                        <th>Puntos utilizados</th>
                        
                        <th>Pago total</th>
                    </tr>
                    <?php foreach ($com as $u) { ?>
                        <tr>
                            <td><?php echo $u["producto"] ?></td>
                            
                            <td><?php echo $u["tipo"] ?></td>
                            
                            <td><?php echo $u["precio unitario"] ?></td>
                            
                            <td><?php echo $u["fecha de compra"] ?></td>
                            
                            <td><?php echo $u["cantidad"] ?></td>
                            
                            <td><?php echo $u["puntos utilizados"] ?></td>
                            
                            <td><?php echo $u["pago total"] ?></td>
                            
                        </tr>


                    <?php } ?>
                    <?php if(count($com)==0) { ?>  
                        <tr>
                            <td style="text-align:center" colspan="7">No se encontraron registros de compras</td>
                        </tr>
                    <?php } ?>
        
        
                </table>
            
            </section>
            
            <?php include 'footer.php' ?>
        </div>
    
</body>
</html>