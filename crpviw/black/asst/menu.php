<ul id="bar">
    <li class="bt-menu"><span class="icon-menu"></span></li>
    <a href=""><img class="logo" src="<?php print(URL_PB) ?>/crpast/image/icon/iso.png" alt="CozyCarrige"></a>
    <img class="perfil" src="<?php print(URL_PB) ?>/crpast/image/foto/marc.jpg" alt="Marc Suquerberg">
    <ul class="children">
        <li><a href="">Ajustes</a></li>
        <li><a onclick="location.href='<?php print(URL_PB); ?>/crpinclude/logout.php'">Cerrar Sesión</a></li>
    </ul>
</ul>
<li><a href="#bar" class="top"><span class="icon-circle-up"></span></a></li>
<ul id="navBar">
    <?php 
        $ced = $_SESSION["ced"];
        $nivel = mysqli_query($mysqli, "SELECT rol FROM usuario WHERE ced = ".$ced);
        $nivel_usr = mysqli_fetch_array($nivel);
        $lvl = $nivel_usr["rol"];
    ?>
    <li><a <?php if ($_SERVER['PHP_SELF'] == "/crpviw/index.php") echo "class='active'" ?> onclick="location.href='<?php print(URL_PB); ?>/crpviw/index'"><span class="icon-home"></span><p>Inicio</p></a></li>
    <?php if ($lvl == 1 || $lvl == 3) : ?>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/crpviw/agenda.php") echo "class='active'" ?> onclick="location.href='<?php print(URL_PB); ?>/crpviw/agenda'"><span class="icon-search"></span><p>Agenda</p></a></li>
    <?php endif; ?>
    <?php if($lvl == 2 || $lvl == 3) : ?>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/crpviw/agregar.php") echo "class='active'" ?> onclick="location.href='<?php print(URL_PB); ?>/crpviw/agregar'"><span class="icon-clipboard"></span><p>Agregar</p></a></li>
    <?php endif; ?>
    <?php if($lvl == 1 || $lvl == 3) : ?>
    <li><a <?php if ($_SERVER['PHP_SELF'] == "/crpviw/mapa.php") echo "class='active'" ?> onclick="location.href='<?php print(URL_PB); ?>/crpviw/mapa'"><span class="icon-location"></span><p>Mapa</p></a></li>
    <?php endif; ?>
    <li><a <?php if ($_SERVER['PHP_SELF'] == "/crpviw/perfil.php") echo "class='active'" ?> onclick="location.href='<?php print(URL_PB); ?>/crpviw/perfil?='getUsusario'"><span class="icon-user"></span><p>Mi Perfil</p></a></li>
</ul>