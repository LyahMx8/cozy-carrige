<?php
 require_once((SERV."/crpinclude/archvconstan.php"));
  $destino = "yimsanabria@gmail.com";
  $correo =  $_POST['email'];
  $nombre = $_POST['nombre'];
  $telefono =  $_POST['tel'];
  $mensaje =  $_POST['mensaje'];
 $cabeceras = 'MIME-Version: 1.0' . "\r\n";
 $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
 $cabeceras .= 'From: "CozyCarrige" <contacto@mx8live.com>';
  
  if (empty($correo)) {
      echo 'error, el correo esá vacío';
  } else if (empty($nombre)) {
      echo 'error, el nombre esá vacío';
  } else if (empty($telefono)) {
      echo 'error, el telefono esá vacío';
  } else if (empty($mensaje)) {
      echo 'error, el mensaje esá vacío';
  } else if ($correo == $destino) {
 echo 'Error, el correo no puede ser igual al del destinatario';
 } else {
      $contenido = "<html lang='es'>
<head><title>Nuevo Correo de CozyCarrige</title></head>
<body>
<div marginwidth='0' marginheight='0' bgcolor='#eceff1' style='margin:0;padding:0;background-color:#eceff1'>
<table cellpadding='0' cellspacing='0' border='0' height='100%' width='100%' bgcolor='#eceff1' style='border-collapse:collapse'>
    <tbody>
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
                                            <a href='http://cozycarrige.mx8live.com' target='_blank'><img src='".URL_PBL."/image/icon/iso1.png' alt='CozyCarrige' width='61' style='border:none;outline:none;text-decoration:none;margin:auto;vertical-align:middle' border='0'></a>
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
						<td valign='middle' align='center' style='text-align:left;padding-left:15px;'><font size='6'><strong style='font-size:32px!important;font-family:Arial,sans-serif;color:#22D3F5;'>Nuevo correo de CozyCarrige.</strong></font></td>
					</tr>
					<tr>
						<td height='20'></td>
					</tr>
					<tr>
						<td valign='middle' align='center' style='text-align:left;padding-left:15px;'><font size='6' style='font-size:16px!important;font-family:Arial,sans-serif;color:#3d3d3d;'> <br><b>Información:</b><br><br><b>Correo:</b> ".$correo."<br><b>Nombre:</b> ".$nombre."<br><b>Telefono:</b> ".$telefono."<br><b>Mensaje:</b> ".$mensaje.
         "</p></font></td>
					</tr>
					
						<tr>
							<td height='20'></td>
						</tr>
				</tbody>
						</table>
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
									<td align='center' style='text-align:center;color:#777777;font-family:Arial,sans-serif;font-size:13px!important'> Por favor no respondas a este correo.<br>
										Si tienes alguna pregunta, encuentra la información<br>
										en nuestra <a href='http://cozycarrige.mx8live.com/ayuda' style='color:#777777;text-decoration:underline' target='_blank'>página de ayuda</a> o <a href='".URL_PB."/contacto' style='color:#777777;text-decoration:underline' target='_blank'>contactános</a>.</td>
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
	</tbody>
</table>
</div>
</body>
</html>";
 	mail($destino, "Mensaje  - CozyCarrige ", $contenido, $cabeceras);
	header ('Location: '.URL_PB);
 }
 ?>