<?php
#Entrada 

$nom = $_POST["nombre"];
$ap = $_POST["apellidos"];
$dr = $_POST["direccion"];
$co = $_POST["correo"];
$us = $_POST["usuario"];
$p1 = $_POST["contraseña"];
$p2 = $_POST["recontraseña"];


#Proceso

$validacion = true ;
    if($p1 != $p2) {
        $validacion = false;
    }
    else{
        include 'conexion.php';
        $stmt= oci_parse($db, "SELECT * FROM cliente");
        oci_execute($stmt);

        while(($user = oci_fetch_assoc($stmt))!=false){
            $email=$user["EMAIL"];
            if($email==$co){
                $validacion=false;
            }
        }
        
        
        if($validacion==true){
            $stmt= oci_parse($db,"INSERT INTO cliente VALUES (cliente_id.nextval,'$nom','$ap','$us','$dr','$co','$p1')");
            oci_execute($stmt);
        }else{
            echo 'todo mal';
        }
    }


#Salida
if($validacion==false and $p1!=$p2){
    header("Location: registro.php?error1=fdg");
}
else{
    if($validacion==false){
        header("Location: registro.php?error2=fdg");
    }else{
        header("Location: confirmacion_registro.php");
    }
}

?>