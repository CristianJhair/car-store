<?php
session_start();
include 'bloquear.php';
?>

<?php 
include 'conexion.php';
$stmt= oci_parse($db, "SELECT * FROM cotigeneral");
oci_execute($stmt);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="prefix.js"></script>
    <style>
        #lista1{
            width: 20%;
            margin-left: 40%;
        }
    </style>
    <title>Promociones</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
</head>
<body>
<div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main1">
            <h2 class="h2">Lista de cotizaciones realizadas</h2>
            <select name="" id="lista1">
                <option value="CotiGeneral">Todas las cotizaciones</option>
                <option value="CotiVencida">Cotizaciones vencidas</option>
                <option value="CotiVigente">Cotizaciones vigentes</option>
            </select>
            <a type="submit" href="registro_cotizacion.php" id="button-table">Añadir cotización</a>
            <table class="tabla">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Placa</th>
                        <th>Costo</th>
                        <th>Pago extra</th>
                        <th>Fecha límite</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody id="select2lista"></tbody>
            </table>
            
        </section>
    
        <?php include 'footer.php' ?>
    </div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val('CotiGeneral');
		    recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"cotizacionselect.php",
			data:"modeloSelect=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>