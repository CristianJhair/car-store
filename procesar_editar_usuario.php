<?php

#Entrada

$id = $_POST["id"];
$c = $_POST["correo"];
$f = $_POST["fecha"];
$tel = $_POST["telef"];
$p1 = $_POST["p1"];
$p2=$_POST["p2"];


#proceso


$validacion=true;

if($c==null or $f==null or $tel==null or $p1==null or $p2==null){
    $validacion=false;
}
else{
    if($p1 != $p2) {
        $validacion = false;
    }
    else{
        include 'conexion.php';
        $p1 = sha1($p1);
        $db->query("UPDATE usuario SET correo='$c', fecha_nacimiento='$f', telefono='$tel', password='$p1' where id='$id'");
        
    }

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