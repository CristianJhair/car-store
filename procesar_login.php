<?php
#Entrada

$c = $_POST["correo"];
$p = $_POST["contraseña"];

#Proceso

$validacion = false;
$p = sha1($p);
include 'conexion.php';
$stmt= $db->query("SELECT * FROM usuario WHERE correo='$c' AND password='$p'");
$usuarios = $stmt->fetchAll();


if(count($usuarios)==1){
    $validacion = true;
    session_start();
    $u= $usuarios[0];
    $_SESSION["correo"] = $u["correo"];
    $_SESSION["nombres"] = $u["nombres"];
    $_SESSION["apellidos"] = $u["apellidos"];

}



#Salida

if($validacion){
    header("Location: index.php");
}
else{
    header("Location: login.php?error2=xcxv");
}



?>