<?php
session_start();

?>
<?php
include 'validacion.php';
?>
<?php

$id = intval($_GET["id"]);

include 'conexion.php';
$stmt= oci_parse($db,"SELECT * FROM MODELO where modelo_id='$id'");
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
                    <form action="Procesar_compra.php" method="post" class="form-register">
                        <div class="contenedor-inputs">
                                                                     
                        <label class="label-48">Precio Unitario: </label> <label class="label-48">S/ <?php echo $u["PRECIO"] ?></label>
                        <label class="label-48">Cantidad: </label>
                        <select name="cantidad" class="input-48">
                            <option value="1">1</option> 
                            <option value="2" >2</option>
                            <option value="3">3</option>
                            <option value="4" >4</option>
                            <option value="5">5</option>
                        </select>
                        <input type="text" name="pais" placeholder="Pais" class="input-48">

                            <input type="text" name="provincia" placeholder="Provincia" class="input-48">
                            <input type="text" name="direccion" placeholder="Direccion" class="input-100">

                            <label class="label-48">Propietario: </label><label class="label-48"> <?php echo $_SESSION["nombres"] ?> <?php echo $_SESSION["apellidos"] ?> </label>
                            <input type="text" name="numcuenta" placeholder="Número de cuenta" class="input-100"> 
                            <input class="btn-enviar"type="submit" value="Comprar">
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