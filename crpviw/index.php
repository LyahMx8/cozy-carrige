<!DOCTYPE html>
<html lang="es">
<head>
	<?php 
		require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
		require_once((SERV."/crpconx/functions.php"));
		sec_session_start();
		if (login_check($mysqli) == true) :
		include((SERV."/crpviw/black/asst/head.php"));
		$consu = "SELECT *FROM card WHERE estado = 1";
		$res = mysqli_query($mysqli, $consu);
		$row = mysqli_fetch_array($res);
	?> 
	<title>Dashboard - CozyCarrige</title>
</head>
<body>
<header class="cabecera">
	<?php
		include((SERV."/crpviw/black/asst/menu.php"));
	?>
</header>
<section class="cuerpo">
<div class="cardsec">
	<h3>Todos los Proyectos</h3>
	<?php
	$i = 1;
	  while($row = mysqli_fetch_array($res)){
	?>
<section class="card">
	<ul class="view">
		<a href="">
			<img style="border-radius:50%;-webkit-box-shadow: 4px 4px 19px -11px rgba(0,0,0,0.5);-moz-box-shadow: 4px 4px 19px -11px rgba(0,0,0,0.5);box-shadow: 4px 4px 19px -11px rgba(0,0,0,0.5);" src="<?php echo $row['foto'];?>" alt="<?php echo $row['nombre'];?>"><br>
			<b style="color:#fff;"><?php echo $row['nombre'];?></b>
		</a><br><br>
	</ul>
	<div class="" id="info">
		<p>
			<b>Descripción: </b><?php $rstDesc = substr($row['descc'], 0, 45); echo $rstDesc. '...'; ?>
			<br><br>
			<b>Fecha de inicio: </b><?php echo $row['fechCita'];?>.
			<br><br>
			<b>Fecha de fin: </b><?php $rstOrig = substr($row['origen'], 0, 45); echo $rstOrig. '...'; ?>.
			<br><br>
			<b>Lugar de la cita: </b><?php $rstDest = substr($row['destino'], 0, 45); echo $rstDest. '...'; ?>.
		</p>
	</div>
	<a onclick="location.href='<?php print(URL_PB); ?>/crpviw/servicio?id=<?php echo $row['id'] ?>'" class="view phantom">Ver más...</a><br>
	<!--a href="" class="view">Aceptar Servicio</a-->
</section>
<?php $i = $i + 1; } ?>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-T3-0pgvV6pgdMGztQ44DPjL0jRSK9Fg&callback=initMap"
  type="text/javascript"></script>
</div>
</section>
<br><br>
<?php else:
	header('Location: '.URL_PB.'/index.php');
	endif;
?>
</body>
</html>