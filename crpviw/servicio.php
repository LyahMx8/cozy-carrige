<!DOCTYPE html>
<html lang="es">
<head>
	<?php 
		require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
		require_once((SERV."/crpconx/functions.php"));
		sec_session_start();
		if (login_check($mysqli) == true) :
		require_once((SERV."/crpinclude/addcard.php"));
		include((SERV."/crpviw/black/asst/head.php"));
		$servicio = $_GET['id'];
		$consu = "SELECT *FROM card WHERE id = ".$servicio;
		$res = mysqli_query($mysqli, $consu);
		$row = mysqli_fetch_array($res);
	?> 
	<title>Dashboard - CozyCarrige</title>
</head>
<body>
	<header class="cabecera">
		<?php include((SERV."/crpviw/black/asst/menu.php")); ?>
	</header>
	<section class="cuerpo">
			<div class="viajeAdd">
			<h3>Estado del viaje de <? echo $row['nombre']; ?></h3>
		<p>
			<b>Estado: </b><?php if ($row['estado'] == 1){ $usrState = "activo"; } else { $usrState = "Viaje tomado o cancelado"; } echo $usrState; ?>
			<br><br>
			<b>Descripción: </b><?php echo $row['descc']; ?>
			<br><br>
			<b>Fecha y hora de la cita: </b><?php echo $row['fechCita'];?>.
			<br><br>
			<b>Lugar de recogida: </b><?php echo $row['origen']; ?>.
			<br><br>
			<b>Lugar de la cita: </b><?php echo $row['destino']; ?>.
		</p>
	</div>
	</section>
	<br><br>
	<?php else:
		header('Location: '.SERV.'/index');
		endif;
	?>
</body>
</html>