<?php

#Entrada

$nom = $_POST["nombre"];
$ap = $_POST["apellidos"];
$dr = $_POST["direccion"];
$co = $_POST["correo"];
$us = $_POST["usuario"];
$p1 = $_POST["contraseña"];
$p2 = $_POST["recontraseña"];


#proceso


$validacion=true;

if($p1 != $p2) {
    $validacion = false;
}
else{
    include 'conexion.php';
    $p1 = sha1($p1);
    $db->query("UPDATE CLIENTE SET email='$c', fecha_nacimiento='$f', telefono='$tel', password='$p1' where id='$id'");
    
}


$estado=false;
include 'conexion.php';
$stmt= $db->query("SELECT * FROM usuario WHERE correo='$c'");
$usuarios = $stmt->fetchAll();  
if(count($usuarios)==1){
    $estado=true;
    session_start();
    $u=$usuarios[0];
    $_SESSION["correo"] = $u["correo"];
}






#salida

if($validacion==false and $p1!=$p2){
    header("Location:editar_usuario.php?error1=fdg & id=$id");
}
else{
    if($validacion==false){
        header("Location:editar_usuario.php?error2=fdg & id=$id");
    }else{
        header("Location:confirmacion_editar_usuario.php?id=$id");
    }
}

?>
















?>