<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
		require_once((SERV."/crpconx/functions.php"));
		sec_session_start();
        include((SERV."/crpviw/head.php"));
    ?>
    <title>Error 404 - CozyCarrige</title>
</head>
<body>
    <header id="header">
        <?php 
		if (login_check($mysqli) == false) : include((SERV."/crpviw/menu.php")); endif; ?>
        <img class="headerImg" src="<?php print (URL_PBL) ?>/image/post/1.jpg" alt="">
        <div class="headerText">
            <h1>Error 404<br>CozyCarrige</h1>
            <p>La página a la que intentas acceder no existe.</p>
            <button type="submit" style="width:calc(100% + 30px);left:-15px;bottom:-15px;" class="ripple btn-bub" data-ripple-color="#d3d3d3" onclick="location.href='<?php print(URL); ?>/index.php'">Regresar</button>
        </div>
    </header>
    <footer>
        <li><a href="#header" id="up"><button class="ripple btn-up">↥</button></a></li>
        <?php include((SERV."/crpviw/footer.php")); ?>
    </footer>
    
</body>
</html>