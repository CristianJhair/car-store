<?php
#Entrada

$c = $_POST["correo"];
$p = $_POST["contraseña"];

#Proceso

$validacion = false;
#$p = sha1($p);
include 'conexion.php';
$stmt= oci_parse($db,"SELECT * FROM cliente WHERE email='$c'");
oci_execute($stmt);
$res = oci_fetch_assoc($stmt);

$validacion = false;

if(oci_num_rows($stmt)==1){
    $validacion = true;
    session_start();
    $_SESSION["correo"] = $res["EMAIL"];
    $_SESSION["nombres"] = $res["NOMBRE"];
    $_SESSION["apellidos"] = $res["APELLIDO"];
}


#Salida

if($validacion){
    header("Location: index.php");
}
else{
    header("Location: login.php?error2=xcxv");
}



?>