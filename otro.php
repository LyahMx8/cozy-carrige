<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulario</title>

</head>

<body>
<form action="http://serohost.co/proyectos/colcatsabana/templates/tz_joomla_ethic/enviar.php" method="POST">
<h3>Por favor llene todos sus datos correctamente</h3>
<br /><br /> 

<label for="ciudad">Ingresa Tu Ciudad</label> 
<input id="ciudad" style="padding: 5px 10px; border-radius: 5px;" name="ciudad" type="text" placeholder="ciudad" /><br /><br /> 

<label for="nombre">Ingresa Tu Nombre</label> 
<input id="nombre" style="padding: 5px 10px; border-radius: 5px;" name="nombre" type="text" placeholder="Ingresa tu Nombre" /><br /><br /> 

<label for="ced">Ingresa Tu Cédula</label> 
<input id="ced" style="padding: 5px 10px; border-radius: 5px;" name="ced" type="tel" placeholder="Ingresa tu Cédula" /><br /><br /> 

<label for="edad">Ingresa Tu Edad</label> 
<input id="edad" style="padding: 5px 10px; border-radius: 5px;" name="edad" type="number" placeholder="Ingresa tu Edad" /><br /><br /> 

<label for="email">Ingresa Tu Email</label> 
<input id="email" style="padding: 5px 10px; border-radius: 5px;" name="email" type="email" placeholder="Ingresa tu Email" /><br /><br /> 

<label for="sexo">Selecciona tu Sexo</label><select id="sexo" name="sexo">
<option id="hombre" value="hombre">Hombre</option>
<option id="mujer" value="mujer">Mujer</option>
</select><br /><br /> 

<label for="tel">Ingresa Tu Número de Teléfono o Celular</label> 
<input id="tel" style="padding: 5px 10px; border-radius: 5px;" name="tel" type="tel" placeholder="Ingresa Tu Número de Teléfono o Celular" /><br /><br /> 

<label for="hoja">Ingresa Tu Hoja de Vida</label> 
<input id="hoja" style="padding: 5px 10px; border-radius: 5px;" name="hoja" type="file" placeholder="Ingresa Tu Hoja de Vida" /> <br /><br /><br /> <button type="submit" value="Enviar"> Enviar</button><button type="reset" value="Borrar"> Borrar</button></form>


<?php

$ciudad = $_POST['ciudad'];
$nombre = $_POST['nombre'];
$ced = $_POST['ced'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$tel = $_POST['tel'];
$hoja = $_POST['hoja'];

echo $ciudad.$nombre.$ced.$edad.$email.$sexo.$tel;
if ($ciudad =='' || $nombre =='' || $ced =='' || $edad =='' || $email =='' || $tel ==''){
    echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";
}else{
    require("http://serohost.co/proyectos/colcatsabana/templates/tz_joomla_ethic/archivosformulario/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = $email;
    $mail->FromName = $nombre; 
    $mail->Addaddress("desarrollo@serotav.com"); // Dirección a la que llegaran los mensajes.
   
// Aquí van los datos que apareceran en el correo que reciba
    //adjuntamos un archivo 
        //adjuntamos un archivo
            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "Nombre: $nombre \n<br />".    
    "Email: $email \n<br />".    
    "Mensaje: 'Buen día<br><br>Soy un/a'.$sexo.' '.$nombre.', con cédula de ciudadanína no. '.$ced.', tengo '.$edad.' y actualmente vivo en '.$ciudad.'; adjunto mi hoja de vida, pueden contactarme por el teléfono: '.$tel.' o al correo: '.$email";
    $mail->AddAttachment($hoja['tmp_name'], $hoja['name']);

// Datos del servidor SMTP

    $mail->IsSMTP = true; 
    $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "informacion@colegiocatolicodelasabana.edu.co, creativo@serotav.com, desarrollo@serotav.com";  // Correo Electrónico
    
    if ($mail->Send())
    echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>
</body>
</html>
</body>
</html>