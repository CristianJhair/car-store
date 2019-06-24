<?php
session_start();
include 'bloquear.php';
?>
<?php 
include 'conexion.php';
$stmt= oci_parse($db, "SELECT * FROM vehiculo v JOIN modelo m on v.modelo_id = m.modelo_id");
oci_execute($stmt);
$i=1;
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
            <h2 class="h2">Lista de vehículos ingresados</h2>
            <a type="submit" href="registro_vehiculo.php" id="button-table">Añadir vehículo</a>
            <table class="tabla">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Placa</th>
                        <th>Modelo</th>
                        <th>Tarjeta de propiedad</th>
                        <th>SOAT</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while (($n = oci_fetch_assoc($stmt))!=false) { ?>
                    <tr>
                        <th><?php echo $i++; ?></th>
                        <td><?php echo $n["PLACA"] ?></td>
                        <td><?php echo $n["NOMBRE_MODELO"] ?></td>
                        <td><?php if( $n["TARJETA_PROPIEDAD"]==1){ echo 'Si';}else{ echo 'No';} ?></td>
                        <td><?php if( $n["SOAT"]==1){ echo 'Si';}else{ echo 'No';}  ?></td>
                        <td>
                        <form action="borrar_vehiculo.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $n["PLACA"] ?>">
                            <button id="button-table" type="submit">Borrar</button>
                        </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
        </section>
    
        <?php include 'footer.php' ?>
    </div>
</body>
</html>