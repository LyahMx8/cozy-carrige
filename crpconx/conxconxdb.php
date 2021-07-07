<?php
$mysqli = new mysqli(CTRL_HST,CTRL_NME,CTRL_PAS,CTRL_DB);
	if(!$mysqli){
		die('No se conecto' .mysqli_error());
	}
$mysqli->set_charset('utf8');