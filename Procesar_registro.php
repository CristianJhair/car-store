<?php
#Entrada 

$nom = $_POST["nombre"];
$ap = $_POST["apellidos"];
$co = $_POST["correo"];
$tel = $_POST["telefono"];
$dni = $_POST["dni"];
$p1 = $_POST["contraseña"];
$p2 = $_POST["recontraseña"];
$cue = $_POST["numcuenta"];
$f = $_POST["fecha"];

#Proceso

$validacion = true ;

if($nom==null or $ap==null or $co==null or $tel==null or $dni==null or $p1==null or $p2==null or $cue==null or $f==null){
    $validacion=false;
}
else{
    if($p1 != $p2) {
        $validacion = false;
    }
    else{
        include 'conexion.php';
        $stmt=$db->query("SELECT * FROM usuario");
        $u=$stmt->fetchAll();
        foreach($u as $user){
            $email=$user["correo"];
            $documento=$user["dni"];
            $num=$user["numero de cuenta"];
            if($email==$co or $dni==$documento or $num==$cue){
                $validacion=false;
            }
        }
        
        
        if($validacion==true){
        $p1 = sha1($p1);
        $db->query(" INSERT INTO usuario VALUES (null,'$nom','$ap','$co','$f','$tel','$dni','$p1',sysdate(),'$cue',1500,0)");
        }
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