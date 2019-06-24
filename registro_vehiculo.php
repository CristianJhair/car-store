<?php
include 'conexion.php';
session_start();

$modelo = oci_parse($db,"SELECT * FROM MODELO");
oci_execute($modelo);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Crear cuenta</title>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main">
            <form action="procesar_registro_vehiculo.php" method="post" class="form-register">
                <h2 class="form__titulo">NUEVO VEHÍCULO</h2>

                <?php if(isset($_GET["error2"])) { ?>
                    <p style= "color:red ; padding: 5px; text-align:center;">El numero de placa ya ha sido registrado</p>
                <?php } ?>
                
                <div class="contenedor-inputs">
                    <select name="MARCA" id="" required class="input-100">
                        <option value="">Elija un modelo..</option >
                        <?php while(($n = oci_fetch_assoc($modelo))!=false){ ?>
                            <option value="<?php echo $n["MODELO_ID"] ?>"><?php echo $n["NOMBRE_MODELO"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="contenedor-inputs">
                    <span class="input-100">Datos generales del Vehículo</span>

                    <input type="text" name="placa" placeholder="Ingrese la placa del vehículo.." maxlength="8" class="input-100" required>
                    <select name="tarjeta" id="" class="input-48" required>
                        <option value="">Tarjeta de propiedad?</option>
                        <option value="1">Si tiene</option>
                        <option value="0">No tiene</option>
                    </select>
                    <select name="soat" id="" class="input-48" required>
                        <option value="">Tiene SOAT?</option>
                        <option value="1">Si tiene</option>
                        <option value="0">No tiene</option>
                    </select>
                    
                </div>
                
                <div class="contenedor-inputs">
                    <input type="submit" value="AGREGAR VEHÍCULO" class="btn-enviar">
                </div>
                
            </form>
        </section>
        <?php include 'footer.php'?>
    </div>
   
    
</body>
</html>