<!doctype html>
<html lang="en">
<head>
    <?php 
require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
        require_once((SERV."/crpconx/functions.php"));
        sec_session_start();
        if (login_check($mysqli) == true) :
    include((SERV."/crpviw/head2.php"));
?>
</head>

<body>

	<div class="wrapper">
    <?php include((SERV."/crpviw/header2.php")); ?>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Editar Perfil</h4>
									<p class="category">Completa tu perfil</p>
	                            </div>
	                            <div class="card-content">
	                                <form>
	                                    <div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Nombre de Usuario</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Correo del Usuario</label>
													<input type="email" class="form-control" >
												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Dirección</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Ciudad</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">País</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>Acerca de mi</label>
													<div class="form-group label-floating">
									    				<label class="control-label"> Mi auto es un Chevrolet Spark GT.</label>
								    					<textarea class="form-control" rows="5"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-primary pull-right" data-background-color="blue">Guardar Cambios</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="assets/img/faces/marc.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">Conductor Solidario</h6>
    								<h4 class="card-title">Conductor</h4>
    								<p class="card-content">
    									Que no te asuste la verdad, porque necesitamos restaurar nuestros fundamentos humanos.
    								</p>
    								<a href="#pablo" class="btn btn-primary btn-round" data-background-color="blue">Agregar a Contactos</a>
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
	        </div>
		<footer class="card" style="margin-bottom:0;">
            <?php include((SERV."/crpviw/footer.php")); ?>
        </footer>
	    </div>
	</div>
<?php
    else:
        header('Location: http://' .URL_PB.'/index.php');
        endif;
?>
</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js" type="text/javascript"></script>
	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>
	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>
	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	<!-- Material Dashboard javascript methods -->
	<script src="assets/js/material-dashboard.js"></script>
	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>