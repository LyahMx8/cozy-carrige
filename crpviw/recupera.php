<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
        require_once((SERV."/crpconx/functions.php"));
        include((SERV."/crpviw/head.php"));
        sec_session_start();
        if (login_check($mysqli) == false) :
    ?>
    <script src="<?php print(URL_PBL) ?>/js/sha512.js"></script>
    <title>CozyCarrige</title>
</head>
<body>
    <header id="header">
        <?php include((SERV."/crpviw/menu.php")); ?>
        <img class="headerImg" src="<?php print (URL_PBL) ?>/image/post/7.jpg" alt="">
        <div class="headerText">
            <h1>Recupera tu cuenta<br>CozyCarrige</h1>
        </div>
    </header>
    <section id="cuerpo" >
        <form action="<?php print(URL) ?>/crpconx/login.php" name="form_login" method="POST" class="form_group caja" style="width:auto;max-width:510px;margin-left:auto !important;margin-right:auto !important;" enctype="application_x-www-form-urlencoded">
        <h3>Recupera tu cuenta - COZYcarrige</h3><br>
            <div>
                <label for="email"><span class="icon-mail2"></span> Ingresa tu Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ingrese su Email">
            </div><br><br>
            <button type="submit" class="ripple btn-a" id="ingreso" value="ingreso" onclick="return log(this.form, this.form.ced, this.form.pass);">Enviar</button>
        </form>
    </section>
    <footer>
        <li><a href="#header" id="up"><button class="ripple btn-up">↥</button></a></li>
        <?php include((SERV."/crpviw/footer.php")); ?>
    </footer>
    <?php else:
        header('Location: '.URL_PB.'/index.php');
        endif;
    ?>
</body>
</html>