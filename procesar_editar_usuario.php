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
include 'conexion.php';

if($p1 != $p2) {
    $validacion = false;
}
else{
    $p1 = sha1($p1);
    $stmt= oci_parse($db, "SELECT * FROM cliente");
    oci_execute($stmt);
    
    while(($user = oci_fetch_assoc($stmt))!=false){
        $email=$user["EMAIL"];
        if($email==$co and $user["cliente_id"]==$id){
            $validacion=false;
        }
    }
        
        
    if($validacion==true){
        $stmt= oci_parse($db,"UPDATE CLIENTE SET email='$c', nombre='$nom', apellidos='$ap', direccion='$dr',
        usuario='$us', password='$p1' where id='$id'");
        oci_execute($stmt);
    }
    
}

$validacion = false;
$stmt= oci_parse($db,"SELECT * FROM cliente WHERE email='$c' AND password='$p'");
oci_execute($stmt);
$res = oci_fetch_assoc($stmt);
if(oci_num_rows($stmt)==1){
    $validacion = true;
    session_start();
    $_SESSION["correo"] = $res["EMAIL"];
    $_SESSION["nombres"] = $res["NOMBRE"];
    $_SESSION["apellidos"] = $res["APELLIDO"];
}

/*$estado=false;
include 'conexion.php';
$stmt= $db->query("SELECT * FROM usuario WHERE correo='$c'");
$usuarios = $stmt->fetchAll();  
if(count($usuarios)==1){
    $estado=true;
    session_start();
    $u=$usuarios[0];
    $_SESSION["correo"] = $u["correo"];
}
*/

#salida

if($p1!=$p2){
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