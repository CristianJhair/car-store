<?php
session_start();

?>
<?php
include 'validacion.php';
?>
<?php

$id = intval($_GET["id"]);

include 'conexion.php';
$stmt= $db->query("SELECT * FROM productos where id='$id'");
$u = $stmt->fetch();


$nom = $u["nombre"];
$s= $db->query("SELECT * FROM comentario where producto='$nom'");
$c= $s->fetchAll();
                

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
                <h2 class="com-comen">Comprar <?php echo $u["nombre"] ?></h2>
                <div id="compra">               
                    <form action="Procesar_compra.php" method="post" class="form-register">
                        <div class="contenedor-inputs">
                        <?php if(isset($_GET["error4"])) { ?>
                            <p style= "color:red ;">Confirme correctamente su numero de cuenta o lleno todos los campos.</p>
                        <?php } ?>
                        <?php if(isset($_GET["error6"])) { ?>
                            <p style= "color:red ;">No tiene suficiente saldo disponible en su cuenta.</p>
                        <?php } ?>
                        <?php if(isset($_GET["error5"])) { ?>
                            <p style= "color:red ;">No hay esa cantidad de cubos disponibles.Vuelva en otro momento</p>
                        <?php } ?>
                        <input type="hidden" name="id" value="<?php echo $u["id"] ?>" >
                                             
                        <label class="label-48">Precio Unitario: </label> <label class="label-48">S/ <?php echo $u["precio"] ?></label>
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
                        <div class="imagen"><img src="<?php echo $u["imagen"] ?>" alt="" height="256" width="280"></div>
                        <div class="nombrep"><?php echo $u["nombre"] ?></div>
                        <div class="comprar">
                            <div class="precio" style="text-align:center; width:100%; font-size: 35px;"> <p> S/ <?php echo $u["precio"] ?> </p></div>
                        </div>
                    </div>
                </div>
                <h2 class="com-comen">Foro de comentarios del cubo <?php echo $u["nombre"] ?> </h2>
                    <form action="Procesar_foro.php" method="post" class="form-register">
                        <div class="contenedor-inputs">
                        <?php if(isset($_GET["error2"])) { ?>
                        <p style= "color:red ;">Debe escribir algun comentario.</p>
                        <?php } ?>
                        <input type="hidden" name="id" value="<?php echo $u["id"] ?>" >
                        <input type="hidden" name="usuario" value="<?php echo $_SESSION["nombres"] ?>  <?php echo $_SESSION["apellidos"] ?>">
                        <label for=""  class="label-48">Usuario:</label> <label for=""  class="label-48"> <?php echo $_SESSION["nombres"] ?>  <?php echo $_SESSION["apellidos"] ?></label>
                        <textarea name="comentario" class="input-100" placeholder="Escribe algo"></textarea>
                        <input type="submit" class="btn-comentar" value="Comentar">
                        </div>
                    </form>
                    <p><br><br><br></p>
                    <?php foreach ($c as $j) { ?>
                    <div class="form-register">
                        <div class="contenedor-inputs">
                        <p class="user"><?php echo $j["usuario"] ?></p>
                        <p class="comentarios"><?php echo $j["contenido"] ?></p> 
                        <p class="comentarios"><?php echo $j["fecha"] ?></p> 
                        <p>------------------------------------------------------------------- <br><br>    </p>
                        </div>
                    </div>
                    <?php }?>
                    
                    
            </div>
        </section>
        <?php include 'footer.php'?>
    </div>
   
    
</body>
</html>