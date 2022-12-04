<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$mensaje = isset($mensaje) ? $mensaje : "";
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
	<head>
	<?php $this->load->view('header'); ?>
	<title>Electricon</title>
</head>
</head>
<body>
	<header>
		 <?php $this->load->view('menu'); ?>
	</header>
	<div class="container">
		<br>
		<center>
			<img src="<?=$base_url?>/recu/img/energy.png" class="img-fluid" width="450">
			<br><br><br>
			<h3>Somos una empresa enfocada a la implementación y promoción del ahorro energético por medio de calentadores y páneles solares, asi también Instalación eléctrica empresarial.</h3>
		</center>
		<div>
			<video onloadedmetadata="this.muted=true" class="d-block w-100 img-fluid" autoplay loop><source src="<?=$base_url?>/recu/img/electri.mp4"></video>
		</div>
	</div>
<footer><?php $this->load->view('footer') ?></footer>
</body>
</html>