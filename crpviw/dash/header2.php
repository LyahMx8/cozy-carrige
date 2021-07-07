<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
			<div class="logo" style="padding:0 !important;">
				<a href="<?php print(URL) ?>/index.php" class="simple-text">
					<img style="width:76px;" src="<?php print(URL_PBL); ?>/image/icon/iso.png" alt="">
				</a>
			</div>
	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li <?php if ($_SERVER['PHP_SELF'] == "/cozycarrige/crpviw/dashboard.php") echo "class='active'" ?> >
	                    <a href="dashboard.php" data-background-color="blue">
	                        <i class="material-icons">dashboard</i>
	                        <p>Inicio</p>
	                    </a>
	                </li>
	                <li <?php if ($_SERVER['PHP_SELF'] == "/cozycarrige/crpviw/user.php") echo "class='active'" ?>>
	                    <a href="user.php">
	                        <i class="material-icons">person</i>
	                        <p>Mi Perfil</p>
	                    </a>
	                </li>
	                <li <?php if ($_SERVER['PHP_SELF'] == "/cozycarrige/crpviw/table.php") echo "class='active'" ?>>
	                    <a href="table.php">
	                        <i class="material-icons">content_paste</i>
	                        <p>Agenda de Viajes</p>
	                    </a>
	                </li>
	                <li <?php if ($_SERVER['PHP_SELF'] == "/cozycarrige/crpviw/maps.php") echo "class='active'" ?>>
	                    <a href="maps.php">
	                        <i class="material-icons">location_on</i>
	                        <p>Servicios en el Area</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Menú</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a style="cursor:pointer" class="navbar-brand" onclick="location.href = '<?php print (URL); ?>/crpviw/dashboard.php'">Tablero • 
                       <?php
                        $ced = $_SESSION["ced"];
                        $cons = mysqli_query($mysqli, "SELECT * FROM usuario WHERE ced = ".$ced);
                        $gove = mysqli_fetch_array($cons);
                        $parte = explode(" ",$gove["nombre"]);
                        echo $parte[0];
                        ?></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a style="cursor:pointer" onclick="location.href = '<?php print (URL); ?>/crpviw/dashboard.php'" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Tablero</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notificaciones</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Tienes un nuevo email</a></li>
									<li><a href="#">5 viajes nuevos cerca de tu zona</a></li>
									<li><a href="#">Han calificado tu servicio</a></li>
								</ul>
							</li>
							<li>
								<a style="cursor:pointer" class="dropdown-toggle" onclick="location.href = '<?php print(URL); ?>/crpviw/user.php'" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Mi Perfil</p>
		 						</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">settings</i>
									<p class="hidden-lg hidden-md">settings</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Configuración</a></li>
									<li><a onclick="location.href='<?php print(URL); ?>/crpinclude/logout.php'">Cerrar Sesión</a></li>
								</ul>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
								<input type="text" class="form-control" placeholder="Buscar...">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
					</div>
				</div>
			</nav>