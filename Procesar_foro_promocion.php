<?php 
#Entrada

$user= $_POST["usuario"];
$comen=$_POST["comentario"];
$id = $_POST["id"];

#Proceso

$estado=true;
if($comen==null){
    $estado=false;
}else{
    include 'conexion.php';
    $sm= $db->query("SELECT * FROM promociones where id='$id'");
    $pr = $sm->fetch();
    $nom=$pr["nombre"];
    $db->query("INSERT INTO comentario VALUES (null,'$user','$comen',sysdate(),'$nom')");

}



#Salida
if($estado==false){
    header("Location:exclusiva.php?error2=zxczx & id=$id");
}else{
    header("Location:exclusiva.php?id=$id ");
}


?>