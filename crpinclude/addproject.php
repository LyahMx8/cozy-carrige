<?php
require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpconx/conxconxdb.php"));
$error = "";
if (isset($_POST['descc'],$_POST['dia'],$_POST['mes'],$_POST['anio'],$_POST['hora'],$_POST['minuto'],$_POST['horario'],$_POST['origen'],$_POST['destino'])){

	$descc = filter_input(INPUT_POST, 'descc', FILTER_SANITIZE_STRING);
	$dia = filter_input(INPUT_POST, 'dia', FILTER_SANITIZE_NUMBER_INT);
	$dia = filter_var($dia, FILTER_VALIDATE_INT);
	if (!filter_var($dia, FILTER_VALIDATE_INT)){
		$error .= '<p class="error">Error, día ingresado no es válido</p>';
	} else if ($dia > 31){
		$error .= '<p class="error">Error, día ingresado no es válido</p>';
	}
	$mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_NUMBER_INT);
	$mes = filter_var($mes, FILTER_VALIDATE_INT);
	if (!filter_var($mes, FILTER_VALIDATE_INT)){
		$error .= '<p class="error">Error, mes ingresado no es válido</p>';
	} else if($mes > 24) {
		$error .= '<p class="error">Error, mes ingresado no es válido</p>';
	}
	$anio = filter_input(INPUT_POST, 'anio', FILTER_SANITIZE_NUMBER_INT);
	$anio = filter_var($anio, FILTER_VALIDATE_INT);
	if (!filter_var($anio, FILTER_VALIDATE_INT)){
		$error .= '<p class="error">Error, año ingresado no es válido</p>';
	} else if($anio < 2017 || $anio > 2019) {
		$error .= '<p class="error">Error, año ingresado no es válido</p>';
	}
	$hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_NUMBER_INT);
	$hora = filter_var($hora, FILTER_VALIDATE_INT);
	if (!filter_var($hora, FILTER_VALIDATE_INT)){
		$error .= '<p class="error">Error, hora ingresada no es válida</p>';
	} else if($hora > 12) {
		$error .= '<p class="error">Error, hora ingresada no es válida</p>';
	}
	$minuto = filter_input(INPUT_POST, 'minuto', FILTER_SANITIZE_NUMBER_INT);
	$minuto = filter_var($minuto, FILTER_VALIDATE_INT);
	if (!filter_var($minuto, FILTER_VALIDATE_INT)){
		$error .= '<p class="error">Error, minuto ingresado no es válido</p>';
	} else if($minuto > 60) {
		$error .= '<p class="error">Error, minuto ingresado no es válido</p>';
	}
	$horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);
	$fechCita = $dia.'-'.$mes.'-'.$anio.'-'.$hora.':'.$minuto.'-'.$horario;
	$origen = filter_input(INPUT_POST, 'origen', FILTER_SANITIZE_STRING);
	$destino = filter_input(INPUT_POST, 'destino', FILTER_SANITIZE_STRING);
	
	$ced = $_SESSION["ced"];
	$cons = mysqli_query($mysqli, "SELECT * FROM usuario WHERE ced = ".$ced." LIMIT 1");
	$res = mysqli_fetch_array($cons);
		$nombre = $res["nombre"];
		$edad = $res["edad"];
		$foto = $res["foto"];
	date_default_timezone_set('America/Bogota');
	$fecha = date("Y"). date("m"). date("d"). date("H"). date("i"). date("s");
	$estado = 1;
	if (empty($error)){
		if ($insert_stmt = $mysqli->prepare("INSERT INTO proyecto (ced,nombre,edad,foto,descc,fechCita,origen,destino,fecha,estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")){
			$insert_stmt->bind_param('ssssssssss', $ced, $nombre, $edad, $foto, $descc, $fechCita, $origen, $destino, $fecha, $estado);
			if (! $insert_stmt->execute()){
				die('error'.mysqli_error($mysqli));
			}
		}
		header('location: '.URL_PB.'/crpviw/gracias.php');
	}
}
?>