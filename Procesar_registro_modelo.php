<?php 
#ENTRADA
$MARCA = $_POST["MARCA"];
$CATALOGO = $_POST["CATALOGO"];
$PROVEEDOR = $_POST["PROVEEDOR"];
$nombre = $_POST["nombre"];
$año = $_POST["año"];
$precio = $_POST["precio"];
$color = $_POST["color"];
$imagen = $_POST["imagen"];
$cantidad = $_POST["cantidad"];

$asientos = $_POST["asientos"];
$puertas = $_POST["puertas"];
$caja_cambios = $_POST["caja_cambios"];
$tipo_motor = $_POST["tipo_motor"];
$capacidad_motor = $_POST["capacidad_motor"];
$traccion = $_POST["traccion"];
$combustible = $_POST["combustible"];
$millas = $_POST["millas"];

#PROCESO

include 'conexion.php';
$stmt= oci_parse($db,"INSERT INTO MODELO VALUES(modelo_id.nextval,'$nombre',$año,$precio,'$color','$imagen',$PROVEEDOR,$CATALOGO,$MARCA,$cantidad)");
oci_execute($stmt);
$stmt= oci_parse($db,"INSERT INTO CARACTERISTICAS VALUES(modelo_id.nextval-1,$asientos,$puertas,'$caja_cambios','$tipo_motor',$capacidad_motor,'$traccion','$combustible',$millas)");
oci_execute($stmt);


#SALIDA

header("Location: index.php");


?>