<?php
#entrada
$placa = $_POST["VEHICULO"];
$extra = $_POST["PAGOEXTRA"];
$cliente = $_POST["CLIENTE"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$año = $_POST["año"];
$fecha =$dia.'/'.$mes.'/'.$año;

#Proceso
$validacion = true;

include 'conexion.php';
$stmt= oci_parse($db, "SELECT * FROM cotizacion");
oci_execute($stmt);

while(($user = oci_fetch_assoc($stmt))!=false){
    $email=$user["EMAIL"];
    if($email==$co){
        $validacion=false;
    }
}

if($validacion==true){
    $stmt= oci_parse($db,"INSERT INTO cotizacion VALUES (cotizacion_id.nextval,$extra,$cliente,'$placa','$fecha')");
    oci_execute($stmt);
}
#Salida
echo 'bien';


?>