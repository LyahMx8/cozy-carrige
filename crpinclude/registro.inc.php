<?php
require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpconx/conxconxdb.php"));
$error_msn = "";

if (isset($_POST['email'],$_POST['nombre'],$_POST['ced'],$_POST['tel'],$_POST['genero'],$_POST['rol'],$_POST['p'])) {
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error_msn .= '<p class="error">Error, el email ingresado no es válido</p>';
	}
	$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
	$ced = filter_input(INPUT_POST, 'ced', FILTER_SANITIZE_NUMBER_INT);
	$ced = filter_var($ced, FILTER_VALIDATE_INT);
	if (!filter_var($ced, FILTER_VALIDATE_INT)){
		$error_msn .= '<p class="error">Error, la cedula ingresada no es válida</p>';
	}
	$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
	$tel = filter_var($tel, FILTER_VALIDATE_INT);
	if (!filter_var($tel, FILTER_VALIDATE_INT)){
		$error_msn .= '<p class="error">Error, número ingresado no es válido</p>';
	}
	$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
	$rol = filter_input(INPUT_POST, 'rol', FILTER_SANITIZE_STRING);
	$pass = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
	if(strlen($pass) != 128){
		$error_msn .= '<p class="error">Contraseña erónea</p>'.mysqli_error;
	}
	date_default_timezone_set('America/Bogota');
	$fecha = date("Y"). date("m"). date("d"). date("H"). date("i"). date("s");
	
	$prep_stmt = "SELECT id FROM usuario WHERE ced = ? LIMIT 1";
	$stmt = $mysqli->prepare($prep_stmt);
	if ($stmt){
		$stmt->bind_param('s', $ced);
			$stmt->execute();
			$stmt->store_result();
			if ($stmt->num_rows == 1){
				$error_msn .= '<p class="error">Lo sentimos...<br>El usuario con esta cédula ya está registrado, pero puedes <a href="'.URL_PB.'/crpviw/recupera.php">Recuperar tu contraseña</a></p>';
			}
		$stmt->close();
	} else {
		$error_msn .= '<p class="error">Error en la base de datos</p>'.mysqli_error;
	}

	$prep_stmt = "SELECT id FROM usuario WHERE email = ? LIMIT 1";
	$stmt = $mysqli->prepare($prep_stmt);
	if ($stmt) {
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$stmt->store_result();
		if ($stmt->num_rows == 1) {
			$error_msn .= '<p class="error">Lo sentimos...<br>Este correo ya está en uso, pero puedes <a href="recupera.php">Recuperar tu contraseña</a></p>';
		}
		$stmt->close();
	} else {
		$error_msn .= '<p class="error">Error en la base de datos</p>';
	}
	
	$prep_stmt = "SELECT id FROM usuario WHERE tel = ? LIMIT 1";
	$stmt = $mysqli->prepare($prep_stmt);
	if ($stmt){
		$stmt->bind_param('s', $tel);
			$stmt->execute();
			$stmt->store_result();
			if ($stmt->num_rows == 1){
				$error_msn .= '<p class="error">Lo sentimos...<br>Ya existe un usuario con este número de celular, puedes intentar <a href="recupera.php">Recuperar tus datos</a></p>';
			}
		$stmt->close();
	} else {
		$error_msn .= '<p class="error">Error en la base de datos</p>'.mysqli_error;
	}
	
	if (empty($error_msn)){
		$random_salt =  hash('sha512', $pass . $salt);
		$pass = hash('sha512', $pass . $random_salt);
		
		if ($insert_stmt = $mysqli->prepare("INSERT INTO usuario (email, nombre, ced, tel, genero, rol, pass, salt, fecha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")){
			$insert_stmt->bind_param('sssssssss', $email, $nombre, $ced, $tel, $genero, $rol, $pass, $random_salt, $fecha);
			if (! $insert_stmt->execute()){
				die('error'.mysqli_error($mysqli));
			}
		}
		$cozmail = array($email, 'yimsanabria@gmail.com');
		for($x=0;$x<count($cozmail);$x++){
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$cabeceras .= 'From: "CozyCarrige" <contacto@mx8live.com>';
			$contenido = "<html lang='es'><head><meta charset='UTF-8'><title>¡Gracias! - CozyCarrige</title></head><body><div marginwidth='0' marginheight='0' bgcolor='#eceff1' style='margin:0;padding:0;background-color:#eceff1'><table cellpadding='0' cellspacing='0' border='0' height='100%' width='100%' bgcolor='#eceff1' style='border-collapse:collapse'><tbody>
			<tr>
				<td>
					<table bgcolor='#ffffff' border='0' width='600' cellpadding='0' cellspacing='0' align='center' style='width:600px;margin:auto;background-color:#ffffff; border-radius:15px 15px 0 0'>
						<tbody>
						<tr>
							<td bgcolor='#22D3F5' style='border-radius:15px 15px 0 0'>
								<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#22D3F5'  style='border-radius:15px 15px 0 0'>
									<tbody>
										<tr>
											<td height='10' colspan='2'></td>
										</tr>
										<tr>
											<td width='42%' valign='middle' align='right'>
												<a href='".URL_PB."' target='_blank'><img src='".URL_PBL."/image/icon/iso1.png' alt='CozyCarrige' width='61' style='border:none;outline:none;text-decoration:none;margin:auto;vertical-align:middle' border='0'></a>
											</td>
											<td width='4%' height='4%'></td>
											<td width='54%' align='left' valign='middle'>
												<font size='2'><a href='".URL_PB."' style='border:0;color:#ffffff;font-family:Arial,sans-serif;font-size:20px!important;text-decoration:none;' target='_blank'><strong>CozyCarrige</strong></a></font>
											</td>
										</tr>
										<tr>
											<td height='10' colspan='2'></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td height='20'></td>
						</tr>
						<tr>
							<td valign='middle' align='center' style='text-align:left;padding-left:15px;'><font size='6'><strong style='font-size:32px!important;font-family:Arial,sans-serif;color:#22D3F5;'> ¡Gracias!<br>Por ayudar al mundo a ser un lugar mejor.</strong></font></td>
						</tr>
						<tr>
							<td height='20'></td>
						</tr>
						<tr>
							<td valign='middle' align='center' style='text-align:left;padding-left:15px;'><font size='6' style='font-size:16px!important;font-family:Arial,sans-serif;color:#3d3d3d;'> ¿Que sigue?<br><br>Ahora debes dirigirte a una de nuestras fundaciones para validar tus datos y comenzar a ser un <a href='".URL_PB."/cozyer' style='color:#3d3d3d'>#Cozyer</a></font></td>
						</tr>
						<tr>
							<td height='20'></td>
						</tr>
							<tr>
								<td align='center'>
									<table border='0' width='80%' cellpadding='0' cellspacing='0' align='center'>
										<tbody>
										<tr>
											<td valign='top' align='center' width='48%'>
												<div style='border-radius:3px;background:#22D3F5;text-align:center' valign='middle'>
													<a href='".URL_PB."/fundaciones' style='background:#22D3F5;border-top:14px solid #22D3F5;border-bottom:14px solid #22D3F5;color:#ffffff;font-family:Arial,sans-serif;font-size:17px!important;line-height:1;text-align:center;text-decoration:none;display:block;border-radius:4px;width:100%' target='_blank'>Listado de fundaciones</a>
												</div>
											</td>
											<td width='4%' height='4%'></td>
											<td valign='top' align='center' width='48%'>
													<div style='border-radius:3px;background:#22D3F5;text-align:center' valign='middle'>
														<a href='".URL_PB."/terminos' style='background-color:#ffffff;border:2px solid #22D3F5;padding:12px 0px;color:#22D3F5;font-family:Arial,sans-serif;font-size:17px!important;line-height:1;text-align:center;text-decoration:none;display:block;border-radius:4px;width:100%' target='_blank'>Términos y condiciones</a>
													</div>
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td height='20'></td>
							</tr>
							<tr>
								<td height='20' bgcolor='#eceff1'></td>
							</tr>
							<tr><td align='center' bgcolor='#ffffff' height='20'></td></tr>
							<tr>
								<td align='center' bgcolor='#ffffff'>
									<table border='0' cellpadding='0' cellspacing='0' align='center' width='90%'>
										<tbody>
											<tr>
												<td width='6%' height='4%'></td>
												<td align='left' valign='middle'>
													<table border='0' cellspacing='0' cellpadding='0' width='100%'>
														<tbody>
															<tr>
																<td> <font style='font-family:Arial,sans-serif;font-size:22px!important;color:#22D3F5;'><b>Tus datos de ingreso son:</b><br><br>
															</font><font size='6' style='font-size:16px!important;font-family:Arial,sans-serif;color:#3d3d3d;'><b>Correo:</b> ".$email."<br><b>Nombre:</b> ".$nombre."<br><b>Cédula:</b> ".$ced."<br><b>Teléfono:</b> ".$tel."<br><b>Rol:</b> ".$rol."<br><b>Contraseña:</b> ".$pass."</font></td>
															</tr>
															<tr>
																<td height='40'></td>
															</tr>
														</tbody>
													</table>
												</td>
												<td width='6%' height='4%'></td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							
								
						</tbody></table>
					<table border='0' width='600' cellpadding='0' cellspacing='0' align='center' style='width:600px;margin:auto'>
							<tbody><tr>
							<td>
								<table border='0' width='100%' cellpadding='0' cellspacing='0'>
									<tbody>
									<tr>
										<td height='20'></td>
									</tr>
									<tr>
										<td style='text-align:center;'><a href='http://cozycarrige.mx8live.com'><img width='80px' src='".URL_PBL."/image/icon/iso2.png' alt='CozyCarrige'></a></td>
									</tr>
									<tr>
										<td align='center' style='text-align:center;color:#777777;font-family:Arial,sans-serif;font-size:13px!important'> Por favor no respondas a este correo.<br>Si crees que se trata de un error, y este correo no era para ti, por favor ignóralo.<br>
											Si tienes alguna pregunta, encuentra la información<br>
											en nuestra <a href='".URL_PB."/ayuda' style='color:#777777;text-decoration:underline' target='_blank'>página de ayuda</a> o <a href='".URL_PB."/contacto' style='color:#777777;text-decoration:underline' target='_blank'>contactános</a>.</td>
									</tr>
									<tr>
										<td height='40'></td>
									</tr>
									
								</tbody></table>
							</td>
						</tr>
						</tbody></table>
					</td>
			</tr>
		</tbody></table></div></body></html>";
		mail($cozmail[$x], "Mensaje  - CozyCarrige ", $contenido, $cabeceras);
	}
		header('location: '.URL_PB.'/crpviw/gracias.php');
	}
}
?>