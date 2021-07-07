<!DOCTYPE html>
<html lang="es">
<head>
	<?php
		require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
		require_once((SERV."/crpconx/functions.php"));
		$error_msn = "";
		require_once((SERV."/crpinclude/pr_login.php"));
		if (login_check($mysqli) == true){
			$logged = 'in';
		} else {
			$logged = 'out';
		}
		include((SERV."/crpviw/head.php"));
	?>
	<script src="<?php print(URL_PBL) ?>/js/sha512.js"></script>
	<title>CozyCarrige</title>
</head>
<body>
	<header id="header">
		<?php include((SERV."/crpviw/menu.php")); ?>
		<img class="headerImg" src="<?php print (URL_PBL) ?>/image/8.jpg" alt="">
		<div class="headerText">
			<h1>Iniciar Sesión<br>CozyCarrige</h1>
		</div>
	</header>
	<section id="cuerpo" >
		<?php
			if(!empty($error_msn)){
				echo "<div class='error'>".$error_msn."</div>";
			}
		?>
		<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" name="form_login" method="POST" class="form_group caja" style="width:auto;max-width:510px;margin-left:auto !important;margin-right:auto !important;" enctype="application_x-www-form-urlencoded">
		<h3>Iniciar Sesión - COZYcarrige</h3><br><br><br>
			<div>
				<label for="ced"><span class="icon-credit-card"></span> Ingresa tu cédula <span style="color:red">*</span></label>
				<input type="tel" size="10" pattern="[0-9]{6,10}" id="ced" name="ced" class="form-control" required placeholder="Cédula">
			</div><br><br>
			<div>
				<label for="pass"><span class="icon-lock"></span> Ingresa tu contraseña</label>
				<input type="password" id="pass" name="pass" class="form-control" required placeholder="Ingrese su Contraseña">
				<br><br>
			</div>
			<button type="submit" class="ripple btn-a" id="ingreso" value="ingreso" onclick="return log(this.form, this.form.ced, this.form.pass);">Ingresar</button>
			<button style="color:#008DA8;width:calc(100% / 2);" class="ripple btn-ripple" data-ripple-color="#d3d3d3" onclick="location.href='<?php print(URL); ?>/crpviw/registro.php'">Crear una cuenta</button>
			<br><br><br>
			<button style="color:#008DA8;width:100%;margin-bottom:-15px;" class="ripple btn-ripple" data-ripple-color="#d3d3d3" onclick="location.href='<?php print(URL); ?>/crpviw/recupera.php'">No puedo iniciar</button>
		</form>
	</section>
	<footer>
		<li><a href="#header" id="up"><button class="ripple btn-up">↥</button></a></li>
		<?php include((SERV."/crpviw/footer.php")); ?>
	</footer>
</body>
</html>