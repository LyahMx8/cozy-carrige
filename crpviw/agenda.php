<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <?php
        require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
        require_once((SERV."/crpconx/functions.php"));
        sec_session_start();
        if (login_check($mysqli) == true) :
        include((SERV."/crpviw/black/asst/head.php"));
    ?>
    <title>Agenda - CozyCarrige</title>
</head>
<body>
    <header class="cabecera">
        <?php include((SERV."/crpviw/black/asst/menu.php")); ?>
    </header>
    <section class="cuerpo">
    <div class="cardsec">
        <h3>Agenda de Viajes</h3>
        
    </div>
    </section>
    <br><br>
    <?php else:
        header('Location: '.SERV.'/index.php');
    endif;
    ?>
</body>
</html>