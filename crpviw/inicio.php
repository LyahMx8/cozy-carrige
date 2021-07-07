<!DOCTYPE html>
<html lang="es">
<head>
    <?php 
		if (login_check($mysqli) == false) :
		include((SERV."/crpviw/head.php")); ?>
    <title>CozyCarrige</title>
</head>
<body onload="casi()">
    <header id="header">
        <?php include((SERV."/crpviw/menu.php")); ?>        
        <img class="headerImg" src="<?php print (URL_PBL) ?>/image/5.jpg" alt="">
        <div class="headerText">
            <h1>CozyCarrige</h1>
            <hr><br><br>
            <p>Somos una plataforma de gesti'on de proyectos de software, facilitamos todas las herramientas para que tu proyecto sea exitoso.</p>
        </div>
        <div class="headerForm" style="margin-top:100px;">
            <h3></h3>
            <button type="submit" style="width:calc(100% + 30px);left:-15px;" class="ripple btn-a" onclick="location.href='<?php print(URL_PB); ?>/crpviw/ingreso.php'">Iniciar sesión</button>
            <br><br>
            <button type="submit" style="width:calc(100% + 30px);left:-15px;bottom:-15px;" class="ripple btn-bub" data-ripple-color="#d3d3d3" onclick="location.href='<?php print(URL_PB); ?>/crpviw/registro.php'">Comienza Ahora</button>
        </div>
    </header>
    <li class="down"><a href="#info">V</a></li>

    <section id="cuerpo">
        <section id="info" class="caja compl_box">
            <?php include((SERV."/crpviw/info.php")); ?>
        </section><br>
        <section class="compl_box" id="contacto">
            <?php include((SERV."/crpviw/contacto.php")); ?>
        </section>
    </section>
    <footer>
        <li><a href="#header" id="up"><button class="ripple btn-up">↥</button></a></li>
        <?php include((SERV."/crpviw/footer.php")); ?>
    </footer>
	<script>
        function casi(){
            swal({
                title: "Muy pronto...",
                type: "success",
                html: "Muy pronto podrás disfrutar de los beneficios que esta plataforma trae para ti. Compárte este proyecto con tus amigos y síguenos en nuestras redes sociales<br><br><a href='https://fb.com/cozycarrige' target='_blank'>Facebook</a><br><a href='https://instagram.com/cozycarrige' target='_blank'>Instagram</a>",
                showCloseButton: true,
                confirmButtonText: "Continuar",
                confirmButtonColor: "#009acf"
            });
        }
	</script>
	<?php else:
        echo '<script>window.location = "'.URL_PB.'/index.php";</script>';
	endif;
?>
</body>
</html>