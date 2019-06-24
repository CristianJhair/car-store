<?php

#Entrada
$id = $_POST["id"];
$nom = $_POST["nombre"];
$ap = $_POST["apellidos"];
$dr = $_POST["direccion"];
$co = $_POST["correo"];
$us = $_POST["usuario"];
$p1 = $_POST["contraseña"];
$p2 = $_POST["recontraseña"];


#proceso

include 'conexion.php';

$stmt= oci_parse($db,"UPDATE CLIENTE SET email='$co', nombre='$nom', apellido='$ap', direccion='$dr', usuario='$us', password='$p1' where CLIENTE_ID=$id");
oci_execute($stmt);
    

$validacion = false;
$stmt= oci_parse($db,"SELECT * FROM cliente WHERE email='$co' AND password='$p1'");
oci_execute($stmt);
$res = oci_fetch_assoc($stmt);
if(oci_num_rows($stmt)==1){
    $validacion = true;
    session_start();
    $_SESSION["correo"] = $res["EMAIL"];
    $_SESSION["nombres"] = $res["NOMBRE"];
    $_SESSION["apellidos"] = $res["APELLIDO"];
}



#salida

if($validacion==false){
    header("Location:editar_usuario.php?error2=fdg & id=$id");
}else{
    header("Location:perfil.php");
}

?>