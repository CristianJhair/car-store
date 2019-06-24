<?php
#Entrada
$id = $_POST["id"];


#Proceso

include 'conexion.php';
$stmt= oci_parse($db, "DELETE FROM VEHICULO WHERE PLACA = '$id'");
oci_execute($stmt);


#Salida
header("Location: vehiculos.php");

?>