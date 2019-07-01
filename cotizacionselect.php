<?php 
include 'conexion.php';
$modeloSelect=$_POST['modeloSelect'];

$stmt= oci_parse($db, "SELECT * FROM $modeloSelect");
oci_execute($stmt);
$i=1;
$cadena="";

	while (($n = oci_fetch_assoc($stmt))!=false) {
		$cadena=$cadena.'<tr>
        <th>'.$i++.'</th>
        <td>'.$n["NOMBRE"].', '.$n["APELLIDO"].'</td>
        <td>'.$n["PLACA"].'</td>
        <td>'.$n["PRECIO"].'</td>
        <td> Por '.$n["DESCRIPCION"].' se paga '.$n["MONTO"].'</td>
        <td>'.$n["FECHA_FIN"].'</td>
        <td>'.$n["ESTADO"].'</td>
        </tr>';
	}

	echo  $cadena;


?>