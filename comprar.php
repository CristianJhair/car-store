<?php
session_start();

?>
<?php
include 'validacion.php';
?>
<?php

$id = intval($_GET["id"]);

include 'conexion.php';
$stmt= oci_parse($db,"SELECT * FROM MODELO M JOIN CARACTERISTICAS C ON M.MODELO_ID = C.CARACTERISTICAS_ID where MODELO_ID=$id");
oci_execute($stmt);


                

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Compra</title>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main">
            <h1>Tienda</h1>
            <div id="tienda">
                <?php while(($u = oci_fetch_assoc($stmt))!=false){ ?>
                <h2 class="com-comen">Comprar <?php echo $u["NOMBRE_MODELO"] ?></h2>
                <div id="compra">               
                    <form action="" method="" class="form-register" class="compra-form">
                        <div class="contenedor-inputs">
                                                                     
                        <label class="label-48">Precio </label> <label class="label-48">S/ <?php echo $u["PRECIO"]; ?></label>
                        <label class="label-48">Año del modelo: </label> <label class="label-48"> <?php echo $u["YEAR_MODEL"] ?></label>
                        <label class="label-48">Color: </label> <label class="label-48"><?php echo $u["COLOR"] ?></label>
                        <label class="label-48">Numero de asientos: </label> <label class="label-48"> <?php echo $u["NUM_ASIENTOS"] ?></label>
                        <label class="label-48">Numero de puertas: </label> <label class="label-48"> <?php echo $u["NUM_PUERTAS"] ?></label>
                        <label class="label-48">Caja de cambios: </label> <label class="label-48"> <?php echo $u["CAJA_CAMBIOS"] ?></label>
                        <label class="label-48">Tipo de motor: </label> <label class="label-48"> <?php echo $u["TIPO_MOTOR"] ?></label>
                        <label class="label-48">Capacidad del motor: </label> <label class="label-48"> <?php echo $u["CAPACIDAD_MOTOR"] ?></label>
                        <label class="label-48">Traccion: </label> <label class="label-48"> <?php echo $u["TRACCION"] ?></label>
                        <label class="label-48">Combustible: </label> <label class="label-48"> <?php echo $u["COMBUSTIBLE"] ?></label>
                        <label class="label-48">Millas recorridas: </label> <label class="label-48"> <?php echo $u["MILLAS_RECORRIDAS"] ?></label>
                        
                            </div>
                        </form>
                    <!--imagen-->
                    <div class="prod">
                        <div class="imagen"><img src="<?php echo $u["IMAGEN"] ?>" alt="" height="256" width="280"></div>
                        <div class="nombrep"><?php echo $u["NOMBRE_MODELO"] ?></div>
                        <div class="comprar">
                            <div class="precio" style="text-align:center; width:100%; font-size: 35px;"> <p> S/ <?php echo $u["PRECIO"] ?> </p></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                    
            </div>
        </section>
        <?php include 'footer.php'?>
    </div>
   
    
</body>
</html>