<?php 
include 'conexion.php';
$modeloSelect=$_POST['modeloSelect'];
$clase = "input-100";
$stmt= oci_parse($db, "SELECT * FROM vehiculo WHERE modelo_id=$modeloSelect");
oci_execute($stmt);

    $cadena="<select id='lista2' name='VEHICULO' required class=".$clase.">
    <option value=''>Elija un vehículo..</option>";

	while (($n = oci_fetch_assoc($stmt))!=false) {
		$cadena=$cadena.'<option value='.$n["PLACA"].'>'.$n["PLACA"].'</option>';
	}

	echo  $cadena."</select>";
	

?>