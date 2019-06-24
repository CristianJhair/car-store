<?php
session_start();
include 'bloquear.php';
?>

<?php 
include 'conexion.php';
$stmt= oci_parse($db, "SELECT * FROM cotizacion c JOIN pagoextra p on c.pago_extra_id = p.pago_extra_id JOIN cliente cl on c.cliente_id=cl.cliente_id");
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
            <h2 class="h2">Lista de cotizaciones realizadas</h2>
            <a type="submit" href="registro_cotizacion.php" id="button-table">Añadir cotización</a>
            <table class="tabla">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Placa</th>
                        <th>Pago extra</th>
                        <th>Fecha límite</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while (($n = oci_fetch_assoc($stmt))!=false) { ?>
                    <tr>
                        <th><?php echo $i++; ?></th>
                        <td><?php echo $n["NOMBRE"].', '.$n["APELLIDO"];  ?></td>
                        <td><?php echo $n["PLACA"]; ?></td>
                        <td><?php echo 'Por '.$n["DESCRIPCION"].' se paga '.$n["MONTO"]; ?></td>
                        <td><?php echo $n["FECHA_FIN"];  ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
        </section>
    
        <?php include 'footer.php' ?>
    </div>
</body>
</html>