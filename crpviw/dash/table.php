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
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Viajes Recientes</h4>
	                                <p class="category">A continuación se muestra una lista de tus viajes realizados recientemente.</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                        <th>ID</th>
	                                    	<th>Nombre</th>
	                                    	<th>Ciudad</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>Dakota Rice</td>
	                                        	<td>Oud-Turnhout</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>Sinaai-Waas</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>Baileux</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                        	<td>Philip Chaney</td>
	                                        	<td>Overland Park</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>5</td>
	                                        	<td>Doris Greene</td>
	                                        	<td>Feldkirchen in Kärnten</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>6</td>
	                                        	<td>Mason Porter</td>
	                                        	<td>Gloucester</td>
	                                        </tr>
	                                    </tbody>
	                                </table>

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