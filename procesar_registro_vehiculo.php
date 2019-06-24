<?php
#Entrada
$marca = $_POST["MARCA"];
$placa = $_POST["placa"];
$tarjeta = $_POST["tarjeta"];
$soat = $_POST["soat"];

#Proceso

$validacion = true ;
include 'conexion.php';
$stmt= oci_parse($db, "SELECT * FROM vehiculo");
oci_execute($stmt);

while(($user = oci_fetch_assoc($stmt))!=false){
    $pla=$user["PLACA"];
    if($pla==$placa){
        $validacion=false;
    }
}

if($validacion==true){
    $stmt= oci_parse($db,"INSERT INTO vehiculo VALUES ('$placa',$marca,$tarjeta,$soat)");
    oci_execute($stmt);
}


#Salida
if($validacion==false){
    header("Location: registro_vehiculo.php?error2=fdg");
}else{
    header("Location: vehiculos.php");
}


?>