<?php
session_start();
$nombre =$_SESSION["nombres"];
$fecha =$_POST["fecha"];
$ap =$_SESSION["apellidos"];
$co =$_SESSION["correo"];
$nomcubo=$_POST["nomcubo"];
$asunto =$_POST["asunto"];
$msj =$_POST["mensaje"];

$estado = true;

    if($asunto==null or $msj==null){
        $estado=false;
    }else{
        include 'conexion.php';
        $stmt= $db->query("SELECT * FROM productos where nombre='$nomcubo'");
        $pr = $stmt->fetch();
        $tipo=$pr["tipo"];
        $db->query("INSERT INTO contacto VALUES (null,'$nombre','$ap','$co',sysdate(),'$tipo','$nomcubo','$asunto','$msj')");
    }


if($estado==true){
    header("Location:contacto_exitoso.php");
}
else{
    header("Location:contacto.php?error3=xzcz");
    }

?>