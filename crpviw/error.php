<?php 
require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/archvconstan.php"));
require_once((SERV."/crpconx/functions.php"));
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);
 
if (! $error) {
    $error = "Ocurrio un error desconocido";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php include((SERV."/crpviw/head.php")); ?>
        <title>Secure Login: Error</title>
    </head>
    <body>
    <header id="header">
        <?php include((SERV."/crpviw/menu.php")); ?>
        <img class="headerImg" src="<?php print (URL_PBL) ?>/image/post/1.jpg" alt="error">
        <div class="headerText">
            <h1>Hubo un problema.</h1>
            <p class="error"><?php echo $error; ?></p>
        </div>
    </header>
    <footer>
        <li><a href="#header" id="up"><button class="ripple btn-up">↥</button></a></li>
        <?php include((SERV."/crpviw/footer.php")); ?>
    </footer>
    </body>
</html>