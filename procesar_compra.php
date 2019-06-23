<?php
    session_start();
    $co= $_SESSION["correo"];
    $id = $_POST["id"];
    $cant = $_POST["cantidad"];
    $pais = $_POST["pais"];
    $prov = $_POST["provincia"];
    $direc = $_POST["direccion"];
    $num = $_POST["numcuenta"];
    
    
    
    
    

   
    include 'conexion.php';
    $sm= $db->query("SELECT * FROM productos where id='$id'");
    $pr = $sm->fetch();
    $stmt= $db->query("SELECT * FROM usuario where correo='$co' ");
    $u = $stmt->fetch();

    #BD productos
    $pun = $pr["puntos"];
    $cant1 = $pr["cantidad"];
    $producto = $pr["nombre"];
    $tipo = $pr["tipo"];
    $pre = $pr["precio"];
    #BD usuario
    $nombre = $u["nombres"];
    $apellido = $u["apellidos"];
    $saldo= $u["saldo"];
    $pts = $u["puntaje"];
    $cuenta=$u["numero de cuenta"];
    $cantidad = $cant1 - $cant ;
    $sub = $cant * $pre ;
    $semi = $cant * $pun ;
    
    $estado = true;


    if($cantidad<0){
        $estado=false;
    }else{
        if($saldo<$sub){
            $estado=false;
        }else{
            if($pais==null or $prov==null or $direc==null or $num==null){
                $estado=false;
            }else{
                if($num != $cuenta){
                    $estado=false;
                }else{
                    $total = $saldo - $sub ;
                    $puntaje = $pts + $semi ;
                    $db->query("UPDATE usuario SET saldo='$total', puntaje='$puntaje' where correo='$co'");
                    $db->query("UPDATE productos SET cantidad='$cantidad' where id='$id'");
                    $db->query("INSERT INTO compras VALUES (null,'$nombre','$apellido','$pais','$prov','$direc','$num',sysdate(),'$producto','$tipo','$pre','$cant',0,'$sub')");
                }
            }
        }

    }





    if($estado==false and $cantidad<0){
        header("Location:comprar.php?error5=xzz& id=$id");
    }else{
        if($estado==false and $saldo<$sub){
            header("Location:comprar.php?error6=xzz& id=$id");
        }else{
            if($estado==false){
                header("Location:comprar.php?error4=xzz& id=$id");
            }else{
                header("Location:compra_exitosa.php?id=$id");
            }
        }

  
    }


?>