<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
        require_once((SERV."/crpinclude/registro.inc.php"));
        require_once((SERV."/crpconx/functions.php"));
        if (login_check($mysqli) == false) :
        include((SERV."/crpviw/head.php"));
    ?>
    <script src="<?php print(URL_PBL); ?>/js/sha512.js"></script>
    <title>CozyCarrige</title>
</head>
<body>
    <header id="header">
        <?php include((SERV."/crpviw/menu.php")); ?>
        <img class="headerImg" src="<?php print (URL_PBL) ?>/image/7.jpg" alt="">
        <div class="headerText">
            <h1>Regístrate<br>CozyCarrige</h1>
        </div>
    </header>
    <section id="cuerpo" >
        <?php
            if(!empty($error_msn)){
                echo $error_msn;
            }
        ?>
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" name="form_regis" method="POST" class="form_group caja" style="width:auto;max-width:510px;margin-left:auto !important;margin-right:auto !important;" enctype="application_x-www-form-urlencoded">
        <h3>Registro - COZYcarrige</h3><br>
        <p>Por favor llena los campos de forma adecuada según las indicaciones<br><span style="color:red">*</span> Obligatorio</p><br><br>
            <div>
                <label for="email"><span class="icon-mail2"></span> Ingresa tu Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Ingrese su Email">
            </div><br><br>
            <div>
                <label for="nombre"><span class="icon-user"></span> Ingresa tu nombre <span style="color:red">*</span></label>
                <input type="text" id="nombre" name="nombre" maxlength="100" class="form-control" required placeholder="Ingrese su nombre">
            </div><br><br>
            <div>
                <label for="ced"><span class="icon-credit-card"></span> Ingresa tu cédula <span style="color:red">*</span></label>
                <input type="tel" pattern="[0-9]{6,10}" maxlength="10" id="ced" name="ced" class="form-control" required placeholder="Cédula">
            </div><br><br>
            <div>
                <label for="tel"><span class="icon-tel"></span> Ingresa tu número celular / teléfono <span style="color:red">*</span></label>
                <input type="tel" pattern="[0-9]{6,10}" maxlength="10" id="tel" name="tel" class="form-control" required placeholder="Teléfono">
            </div><br><br>
            <div id="genero" style="color:#3d3d3d !important;">
                <p><span class="icon-man-woman"></span> Selecciona tu sexo <span style="color:red">*</span></p><br>
                <input type="radio" name="genero" id="hombre" value="hombre" checked><label class="radio" for="hombre">Hombre</label>
                <input type="radio" name="genero" id="mujer" value="mujer"><label class="radio" for="mujer">Mujer</label>
                <input type="radio" name="genero" id="otro" value="otro"><label class="radio" for="otro">Otro</label>
            </div><br><br>
            <div>
                <label for="rol">Soy: <span style="color:red">*</span> </label>
                <select id="rol" name="rol">
                    <option value="1">Desarrollador</option>
                    <option value="2">Líder de proyecto</option>
                </select>
            </div><br><br>
            <div>
                <label for="pass"><span class="icon-lock"></span> Ingresa tu contraseña <span style="color:red">*</span><br>Debe tener por lo menos una letra minúscula, una mayúscula y un número</label>
                <input type="password" id="pass" name="pass" class="form-control" required placeholder="Ingrese su Contraseña">
                <br><br>
                <!-- <label for="confirm_pass">Las contraseñas deben coincidir</label>
                <input type="password" id="confirm_pass" name="confirm_pass" class="form-control" required placeholder="Confirmar contraseña">-->
            </div><br><br>
            <p>Recuerda que al registrarte aceptas nuestra <a href="">Política de Tratamiento de Datos</a></p>
            <br><button type="reset" style="color:#008DA8;width:100px;" class="ripple btn-ripple" data-ripple-color="#d3d3d3" id="delete" value="Reset" onclick="this.form.reset()">Reiniciar</button>
            <button type="submit" class="ripple btn-a" id="send_regis" value="send_regis" onclick="return register(this.form, this.form.email, this.form.nombre, this.form.ced, this.form.tel, this.form.genero, this.form.rol, this.form.pass);">Enviar</button>
            <br><br><br>
            <button style="color:#008DA8;width:100%;margin-bottom:-15px;" class="ripple btn-ripple" data-ripple-color="#d3d3d3" id="volver" value="volver" onclick="location.href='<?php print(URL_PB); ?>/crpviw/ingreso.php'">Iniciar Sesión</button>
        </form>
    </section>
    <footer>
        <li><a href="#header" id="up"><button class="ripple btn-up">↥</button></a></li>
        <?php include((SERV."/crpviw/footer.php")); ?>
    </footer>
    <?php else:
        header('Location: '.URL_PB.'/index.php');
    endif;
    ?>
</body>
</html>