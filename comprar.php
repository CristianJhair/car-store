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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <div>
                    <div class="prod">
                        <div class="imagen"><img src="<?php echo $u["IMAGEN"] ?>" alt="" height="256" width="280"></div>
                        <div class="nombrep"><?php echo $u["NOMBRE_MODELO"] ?></div>
                        <div class="comprar">
                            <div class="precio" style="text-align:center; width:100%; font-size: 35px;"> <p> S/ <?php echo $u["PRECIO"] ?> </p></div>
                        </div>
                        
                    </div>
                        <button type="submit" id="button-buy" data-toggle="modal" data-target="#exampleModal">Lo quiero</button>
                    
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">COMPRAR PRODUCTO</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div><h3>¡Hola <?php echo $_SESSION["nombres"] ?></h3><h5>Si desea el producto, le recomendamos</h5></div>
                                <div><span> - Llamar al 945082686</span></div>
                                <div><span> - Enviar correo a usapercars@gmail.com</span></div>  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                     
                     
                </div>
                <?php } ?>
                    
            </div>
        </section>
        <?php include 'footer.php'?>
    </div>
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>