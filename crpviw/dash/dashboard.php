<!doctype html>
<html lang="es">
<head>
    <?php
        require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
        include_once((SERV."/crpconx/functions.php"));
        sec_session_start();
        if (login_check($mysqli) == true) :
        include((SERV."/crpviw/head2.php"));
    ?>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/material-dashboard.css">
    <link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
	    <?php include((SERV."/crpviw/header2.php")); ?>
			<div class="content">
				<div class="container-fluid">
                    <div class="card card-nav-tabs">
                        <div class="nav-tabs-navigation row">
                            <div class="card-header" data-background-color="blue" style="height:auto;overflow:hidden;">
                            <span class="nav-tabs-title"><b>Página de prueba</b> Esta página es de prueba y aún no funciona, tus datos de registro se guardarán en nuestra base de datos para contactarnos contigo cuándo esta plataforma se habilite.<br>Muchas gracias.</span>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="blue">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Nuevo Servicio:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#profile" data-toggle="tab">
														<i class="material-icons">person</i>
														Para:
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#messages" data-toggle="tab">
														<i class="material-icons">location_on</i>
														Ver Mapa
													<div class="ripple-container"></div></a>
												</li><!--
												<li class="">
													<a href="#settings" data-toggle="tab">
														<i class="material-icons">cloud</i>
														Server
													<div class="ripple-container"></div></a>
												</li>
												-->
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="profile">
											<table class="table">
												<tbody>
													<tr>
														<td>
														</td>
														<td><div class="card card-profile"><div class="card-avatar"><a href="#Jan"></a><img src="assets/img/faces/jan.jpg" alt=""></div><h4 class="card-title">Jan Norm</h4></div></td>
														<td class="td-actions text-right">
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td><b>Datos:</b><br>82 años<br>CC. 123456<br> Tel: 1234567890<br><br><b>Descripción:</b> Tengo problemas para caminar, y fui diagnosticado con una enfermedad renal.<br></td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td><b>Vivo en:</b><br>Calle siempreviva #123</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td><b>Cita:</b><br>Revisión renal y análisis pulmonar<br>En: Compensar, P. Sherman, Calle Wallaby #4-2, Bogotá</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="tab-pane" id="messages">
											<table class="table">
												<tbody>
													<tr>
														<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22495.45389517393!2d-74.11206273080093!3d4.652458592235976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b959db5bd47%3A0x65d1088cf8ab07de!2sCompensar%2C+Calle+26!5e0!3m2!1ses!2sco!4v1495610758205" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="blue">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Nuevo Servicio:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#profile" data-toggle="tab">
														<i class="material-icons">person</i>
														Para:
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#messages" data-toggle="tab">
														<i class="material-icons">location_on</i>
														Ver Mapa
													<div class="ripple-container"></div></a>
												</li><!--
												<li class="">
													<a href="#settings" data-toggle="tab">
														<i class="material-icons">cloud</i>
														Server
													<div class="ripple-container"></div></a>
												</li>
												-->
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="profile">
											<table class="table">
												<tbody>
													<tr>
														<td>
														</td>
														<td><div class="card card-profile"><div class="card-avatar"><a href="#Jan"></a><img src="assets/img/faces/jan.jpg" alt=""></div><h4 class="card-title">Jan Norm</h4></div></td>
														<td class="td-actions text-right">
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td><b>Datos:</b><br>82 años<br>CC. 123456<br> Tel: 1234567890<br><br><b>Descripción:</b> Tengo problemas para caminar, y fui diagnosticado con una enfermedad renal.<br></td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td><b>Vivo en:</b><br>Calle siempreviva #123</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td><b>Cita:</b><br>Revisión renal y análisis pulmonar<br>En: Compensar, P. Sherman, Calle Wallaby #4-2, Bogotá</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="tab-pane" id="messages">
											<table class="table">
												<tbody>
													<tr>
														<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22495.45389517393!2d-74.11206273080093!3d4.652458592235976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b959db5bd47%3A0x65d1088cf8ab07de!2sCompensar%2C+Calle+26!5e0!3m2!1ses!2sco!4v1495610758205" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="blue">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Nuevo Servicio:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#profile" data-toggle="tab">
														<i class="material-icons">person</i>
														Para:
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#messages" data-toggle="tab">
														<i class="material-icons">location_on</i>
														Ver Mapa
													<div class="ripple-container"></div></a>
												</li><!--
												<li class="">
													<a href="#settings" data-toggle="tab">
														<i class="material-icons">cloud</i>
														Server
													<div class="ripple-container"></div></a>
												</li>
												-->
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="profile">
											<table class="table">
												<tbody>
													<tr>
														<td>
														</td>
														<td><div class="card card-profile"><div class="card-avatar"><a href="#Jan"></a><img src="assets/img/faces/jan.jpg" alt=""></div><h4 class="card-title">Jan Norm</h4></div></td>
														<td class="td-actions text-right">
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td><b>Datos:</b><br>82 años<br>CC. 123456<br> Tel: 1234567890<br><br><b>Descripción:</b> Tengo problemas para caminar, y fui diagnosticado con una enfermedad renal.<br></td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td><b>Vivo en:</b><br>Calle siempreviva #123</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td><b>Cita:</b><br>Revisión renal y análisis pulmonar<br>En: Compensar, P. Sherman, Calle Wallaby #4-2, Bogotá</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="tab-pane" id="messages">
											<table class="table">
												<tbody>
													<tr>
														<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22495.45389517393!2d-74.11206273080093!3d4.652458592235976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b959db5bd47%3A0x65d1088cf8ab07de!2sCompensar%2C+Calle+26!5e0!3m2!1ses!2sco!4v1495610758205" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
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
	<script type="text/javascript">
    	$(document).ready(function(){
			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();
    	});
	</script>
<?php
    else:
        header('Location: http://' .URL_PB.'/index.php');
        endif;
?>
</html>