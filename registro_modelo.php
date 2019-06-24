<?php
include 'conexion.php';
session_start();

$proveedor = oci_parse($db,"SELECT * FROM proveedor");
oci_execute($proveedor);

$catalogo = oci_parse($db,"SELECT * FROM catalogo");
oci_execute($catalogo);

$marca = oci_parse($db,"SELECT * FROM marca");
oci_execute($marca);

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
            <form action="Procesar_registro_modelo.php" method="post" class="form-register">
                <h2 class="form__titulo">AGREGAR UN NUEVO MODELO</h2>
                <?php if(isset($_GET["error1"])) { ?>
                    <p style= "color:red ;">debe llenar los espacios en blanco.</p>
                <?php } ?>
                <?php if(isset($_GET["error2"])) { ?>
                    <p style= "color:red ; padding: 5px; text-align:center;">Debe completar todos sus datos o ya existe ese correo/DNI/Número de cuenta.</p>
                <?php } ?>
                
                <div class="contenedor-inputs">
                    <span class="input-100" >Datos generales del modelo</span>
                    <select name="MARCA" id="" required>
                        <option value="">Marca</option>
                        <?php while(($n = oci_fetch_assoc($marca))!=false){ ?>
                            <option value="<?php echo $n["MARCA_ID"] ?>"><?php echo $n["NOM_MARCA"] ?></option>
                        <?php } ?>
                    </select>
                    <select name="CATALOGO" id="" required>
                        <option value="" >Catálogo</option>
                        <?php while(($n = oci_fetch_assoc($catalogo))!=false){ ?>
                            <option value="<?php echo $n["ID_CATALOGO"] ?>"><?php echo $n["NOMBRE"] ?></option>
                        <?php } ?>
                    </select>
                    <select class="input-100" name="PROVEEDOR" id="" required>
                        <option value="">Elija el proveedor</option>
                        <?php while(($n = oci_fetch_assoc($proveedor))!=false){ ?>
                            <option value="<?php echo $n["PROVEEDOR_ID"] ?>"><?php echo $n["NOMBRE"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="contenedor-inputs">
                    <span class="input-100">Datos generales del modelo</span>

                    <input type="text" name="nombre" placeholder="Nombre del modelo" class="input-100" required>
                    <input type="number" name="precio" placeholder="Precio del modelo" class="input-48" required>
                    <input type="number" name="año" placeholder="Año del modelo " class="input-48" required>
                    <input type="text" name="color" placeholder="Color del modelo" maxlength="15" class="input-48" required>
                    <input type="number" name="cantidad" placeholder="Cantidad modelos disponibles" maxlength="8" class="input-48" required>
                    <input type="text" name="imagen" placeholder=" URL de imagen" class="input-100" required>
                </div>
                
                <div class="contenedor-inputs">
                
                    <span class="input-100">Caracteristicas modelo</span>
                
                    <input type="number" name="asientos" placeholder="Cantidad de asientos del modelo" class="input-48" required>
                    <input type="number" name="puertas" placeholder="Cant. puertas" class="input-48" required>
                    <input type="text" name="traccion" placeholder="Tipo de tracción" maxlength="8" class="input-100" required>
                    <input type="text" name="caja_cambios" placeholder="Tipo de cambios" class="input-48" required>
                    <input type="number" name="capacidad_motor" placeholder=" Capacidad del motor" maxlength="13" class="input-48" required>
                    <input type="text" name="tipo_motor" placeholder="Tipo de motor" maxlength="15" class="input-100" required>
                    <input type="text" name="combustible" placeholder="Tipo de combustible" maxlength="8" class="input-48" required>
                    <input type="number" name="millas" placeholder="Millas recorridas" maxlength="8" class="input-48" required>
                    

                </div>
                <div class="contenedor-inputs">
                    <input type="submit" value="CREAR MODELO" class="btn-enviar">
                </div>
                
            </form>
        </section>
        <?php include 'footer.php'?>
    </div>
   
    
</body>
</html>