<?php 
//LOGIN.PHP
include ('views/front/login.php'); 

	//Encabezado de la pagina
	include ('views/front/templates/head.php');
 ?>
 								<?php  //validar errores
								if(isset($_GET['error'])){
								include ('views/errors/errors.php');
								} ?>

