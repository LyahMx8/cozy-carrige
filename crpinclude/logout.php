<?php
include_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpconx/functions.php"));
sec_session_start();
$_SESSION = array();
$params = session_get_cookie_params();
setcookie(session_name(), '', time() - 1800, $params["path"], $params["domain"],$params["secure"],$params["httponly"]);
session_destroy();
header('location: '.URL_PB);
?>