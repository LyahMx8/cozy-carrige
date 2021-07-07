<?php    
require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
require_once((SERV."/crpconx/functions.php"));
sec_session_start();
	if(login_check($mysqli) == true) {
		header('Location: ' .URL_PB.'/crpviw/index.php');
	} else {
		$path = SERV."/crpviw/inicio.php";
		if(file_exists($path)){
			require($path);
		} else {
		echo $path;
		}
	}
?>