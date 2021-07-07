<?php
sec_session_start();
require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpconx/conxconxdb.php"));
if(isset($_POST['ced'], $_POST['p'])){
    $ced = $_POST['ced'];
    $pass = $_POST['p'];
    if(login($ced, $pass, $mysqli) == true){
        echo'<script>window.location="'.URL_PB.'";</script>';
    } else {
        $error_msn .= '<p class="error">Lo sentimos...<br>Tus datos son err¨®neos, si no tienes una cuenta puedes <a href="registro.php">Crear una</a></p>';
    }
}