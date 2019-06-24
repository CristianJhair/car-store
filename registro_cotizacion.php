<?php
include 'conexion.php';
session_start();

$modelo = oci_parse($db,"SELECT * FROM MODELO");
oci_execute($modelo);

$cliente = oci_parse($db,"SELECT * FROM CLIENTE where nombre != 'admin'");
oci_execute($cliente);

$pago_extra = oci_parse($db,"SELECT * FROM PAGOEXTRA");
oci_execute($pago_extra);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Crear cuenta</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
</head>
<body>
    <div class="contenedor">
        <?php include 'cabecera.php' ?>
        <section class="main">
            <form action="Procesar_registro_cotizacion.php" method="post" class="form-register">
                <h2 class="form__titulo">NUEVA COTIZACIÓN</h2>

                <?php if(isset($_GET["error2"])) { ?>
                    <p style= "color:red ; padding: 5px; text-align:center;">El cliente ya tiene cotizacion para este modelo</p>
                <?php } ?>
                
                <div class="contenedor-inputs">
                    <select name="MODELO" id="lista1" required class="input-100">
                        <option value="0">Elija un modelo..</option >
                        <?php while(($n = oci_fetch_assoc($modelo))!=false){ ?>
                            <option value="<?php echo $n["MODELO_ID"] ?>"><?php echo $n["NOMBRE_MODELO"] ?></option>
                        <?php } ?>
                    </select>

                    <div id="select2lista" class="input-48"></div>

                    <select name="PAGOEXTRA" id="" required class="input-48">
                        <option value="">Algun pago extra..</option >
                        <?php while(($n = oci_fetch_assoc($pago_extra))!=false){ ?>
                            <option value="<?php echo $n["PAGO_EXTRA_ID"] ?>"><?php echo $n["DESCRIPCION"] ?>,  <?php echo $n["MONTO"] ?></option>
                        <?php } ?>
                    </select>

                    <select name="CLIENTE" id="" required class="input-100">
                        <option value="">Elija un cliente..</option >
                        <?php while(($n = oci_fetch_assoc($cliente))!=false){ ?>
                            <option value="<?php echo $n["CLIENTE_ID"] ?>"><?php echo$n["APELLIDO"]?>, <?php echo $n["NOMBRE"] ?> </option>
                        <?php } ?>
                    </select>
                            <div>
                                <span>Fecha de vencimiento de cotizacion:</span>
                                
                                <select name="dia" required id="input-32">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select name="mes" id="input-32">
                                    <option value="01">Enero</option>
                                    <option value="02">Febrero</option>
                                    <option value="03">Marzo</option>
                                    <option value="04">Abril</option>
                                    <option value="05">Mayo</option>
                                    <option value="06">Junio</option>
                                    <option value="07">Julio</option>
                                    <option value="08">Agosto</option>
                                    <option value="09">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select>
                                <select name="año" id="input-32">
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                    
                </div>
                                
                <div class="contenedor-inputs">
                    <input type="submit" value="GNERAR COTIZACIÓN" class="btn-enviar">
                </div>
                
            </form>
        </section>
        <?php include 'footer.php'?>
    </div>
   
    
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(0);
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
			url:"vehiculoSelect.php",
			data:"modeloSelect=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>