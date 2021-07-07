<?php
require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
require_once((SERV."/crpconx/conxconxdb.php"));
function sec_session_start(){
	$session_cozy = 'sec_session_cozy';
	$secure = SECURE;
	$httponly = true;
	if(ini_set('session.use_only_cookies',1) === FALSE){
		header('Location: '.URL_PB.'/crpviw/error.php?err=No se puede iniciar una sesión segura (ini_set)');
		exit();
	}
	$cookieParams = session_get_cookie_params();
	session_set_cookie_params($cookieParams["lifetime"],
							 $cookieParams["path"],
							 $cookieParams["domain"],
							 $secure,
							 $httponly);
	session_name($session_cozy);
	session_start();
	session_regenerate_id();
}

function login($ced,$pass,$mysqli){
	if($stmt=$mysqli->prepare("SELECT id, ced, pass, salt FROM usuario WHERE ced = ? LIMIT 1")){
		$stmt->bind_param('s' ,$ced);
		$stmt->execute();
		$stmt->store_result();
		
		$stmt->bind_result($user_id, $ced, $db_pass, $salt);
		$stmt->fetch();
		
		$pass = hash('sha512', $pass . $salt);
		if ($stmt->num_rows == 1){
			if(checkbrute($user_id, $mysqli) == true){
				return false;
			} else {
				if ($db_pass == $pass){
					$user_browser = $_SERVER['HTTP_USER_AGENT'];
					$user_id = preg_replace("/[^0-9]+/","",$user_id);
					$_SESSION['user_id'] = $user_id;
					$ced = preg_replace ("/[^0-9_\-]+/","",$ced);
					
					$_SESSION['ced'] = $ced;
					$_SESSION['login_string'] = hash('sha512',$pass . $user_browser);
					return true;
				} else {
					$now = time();
					$mysqli->query("INSERT INTO login_attemp(user_id, time) VALUES ('$user_id', '$now')");
					return false;
				}
			}
		} else {
			return false;
		}
	}
}

function checkbrute($user_id, $mysqli){
	$now = time();
	$valid_attemps = $now - (2 * 60 * 60);
	
	if($stmt = $mysqli->prepare("SELECT time FROM login_attemp WHERE user_id = ? AND time > '$valid_attemps'")){
		$stmt->bind_param('i', $user_id);
		
		$stmt->execute();
		$stmt->store_result();
		
		if ($stmt->num_rows > 5){
			return true;
		} else {
			return false;
		}
	}
}

function login_check($mysqli){
	if (isset($_SESSION['user_id'], $_SESSION['ced'], $_SESSION['login_string'])){
		$user_id = $_SESSION['user_id'];
		$ced = $_SESSION['ced'];
		$login_string = $_SESSION['login_string'];
		
		$user_browser = $_SERVER['HTTP_USER_AGENT'];
		
		if ($stmt = $mysqli->prepare("SELECT pass FROM usuario WHERE id = ? LIMIT 1")){
			$stmt->bind_param('i',$user_id);
			$stmt->execute();
			$stmt->store_result();
			
			if ($stmt->num_rows == 1){
				$stmt->bind_result($pass);
				$stmt->fetch();
				$login_check = hash('sha512', $pass . $user_browser);
				if ($login_check == $login_string){
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	} else {
		return false;
	}
}

function esc_url($url) { //Escanea PHP-SELF
	if ('' == $url) {
		return $url;
	}
	$url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
	$strip = array('%0d', '%0a', '%0D', '%0A');
	$url = (string) $url;
	$count = 1;
	while ($count) {
		$url = str_replace($strip, '', $url, $count);
	}
	$url = str_replace(';//', '://', $url);
	$url = htmlentities($url);
	$url = str_replace('&amp;', '&#038;', $url);
	$url = str_replace("'", '&#039;', $url);
	if ($url[0] !== '/') {
		return '';
	} else {
		return $url;
	}
}