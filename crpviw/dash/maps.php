<!doctype html>
<html lang="en">
<head>
	<?php 
        require_once(($_SERVER['DOCUMENT_ROOT']."/cozycarrige/crpinclude/archvconstan.php"));
        require_once((SERV."/crpconx/functions.php"));
        sec_session_start();
        if (login_check($mysqli) == true) :
	include (SERV."/crpviw/head2.php"); ?>
</head>

<body>

	<div class="wrapper">
	    <?php include((SERV."/crpviw/header2.php")); ?>
        <div class="content">
	        <div class="container-fluid">
	            <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22495.45389517393!2d-74.11206273080093!3d4.652458592235976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b959db5bd47%3A0x65d1088cf8ab07de!2sCompensar%2C+Calle+26!5e0!3m2!1ses!2sco!4v1495610758205" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <footer class="card" style="margin-bottom:0;">
                            <?php include((SERV."/crpviw/footer.php")); ?>
        </footer>
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