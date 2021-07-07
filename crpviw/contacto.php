<h3 style="text-align:center;">Contacto</h3>
<form action="<?php print (URL); ?>/crpconx/enviar.php" name="form_contacto" method="POST" class="form_group caja contx">
    <h3 class="GraciasMsg"></h3>
    <h3>Contáctate con nosotros</h3>
    <br><br><div>
        <label for="email"><span class="icon-mail2"></span> Ingrese su Email</label>
        <input type="email" id="email" name="email" class="form-control" required placeholder="Ingrese su Email">
    </div>
    <br><br><div>
        <label for="nombre"><span class="icon-user"></span> Ingrese su nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" required placeholder="Ingrese su nombre">
    </div>
    <br><br><div>
        <label for="tel"><span class="icon-phone"></span> Ingrese su teléfono</label>
        <input type="tel" pattern=".{7,10}" id="tel" name="tel" class="form-control" required placeholder="Telefono">
    </div>
    <br><br><div>
        <label for="mensaje"><span class="icon-bubbles2"></span> Mensaje</label><br>
        <textarea style="height: 60px;" name="mensaje" class="form-control" required id="mensaje" rows="4" cols="30" placeholder="Mensaje..."></textarea>
    </div>
    <br><button type="reset" style="color:#008DA8;width:100px;" class="ripple btn-ripple" data-ripple-color="#d3d3d3" id="delete" value="Reset" onclick="this.form.reset()">Reiniciar</button>
    <button type="submit" class="ripple btn-a" id="send" value="Enviar" onclick="formulario()">Enviar</button>
</form>
<div class="contx">
    <div class="caja">
    <p style="float:left;">Direccion: Avenida Circunvalar No. 60-00 Bogotá, Colombia<br>Celular: 3219701060<br>Correo: <a href="mailto:contacto@mx8live.com?Subject=Contacto%20CozyCarrige" target="_top">contacto@mx8live.com</a></p>
    </div>    
    <div>
        <a class="catlg_img" style="width:calc(100% / 3 - 10px);" href="https://www.facebook.com/CozyCarrige/" target="_blank"><span class="icon-span icon-facebook2"></span></a>
        <a class="catlg_img" style="width:calc(100% / 3 - 10px);" href="https://instagram.com/cozycarrige" target="_blank"><span class="icon-span icon-instagram"></span></a>
        <a class="catlg_img" style="width:calc(100% / 3 - 10px);" href="https://www.linkedin.com/company/cozycarrige" target="_blank"><span class="icon-span icon-linkedin"></span></a>
    </div>
</div>