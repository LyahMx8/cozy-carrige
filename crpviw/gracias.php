<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
        include((SERV."/crpviw/head.php"));
    ?>
    <title>CozyCarrige</title>
    <script>
        var imagenes=new Array(
            '<?php print('URL_PB'); ?>/crpast/image/post/0.jpg',
            '<?php print('URL_PB'); ?>/crpast/image/post/11.jpg'
        );
        function Rotar(){
          var index=Math.floor((Math.random()*imagenes.length));
            document.getElementById("gracias").src=imagenes[index];
        }
        onload=function(){
            Rotar();
            setInterval(Rotar,5000);
        }
    </script>
</head>
<body>
    <header id="header">
        <?php include((SERV."/crpviw/menu.php")); ?>
        <img class="headerImg" id="gracias" src="" alt="Gracias">
        <div class="headerText">
            <h1>Gracias</h1><br><br>
            <p>Por ayudar a hacer del mundo un lugar mejor.<br><br>Nuestra plataforma aún está en construcción, pero tus datos han sido guardados en nuestra base de datos.<br>Muy pronto te enviaremos un correo informándote sobre la habilitación de nuestra plataforma.</p>
<button type="submit" style="width:calc(100% + 30px);left:-15px;bottom:-15px;" class="ripple btn-bub" data-ripple-color="#d3d3d3" onclick="location.href='<?php print(URL); ?>/crpviw/ingreso.php'">Iniciar sesión</button>
        </div>
    </header>
    <footer>
        <li><a href="#header" id="up"><button class="ripple btn-up">↥</button></a></li>
        <?php include((SERV."/crpviw/footer.php")); ?>
    </footer>
</body>
</html>