<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$mensaje = isset($mensaje) ? $mensaje : "";
?><!DOCTYPE html>
<html lang="es">
<head>
	<?php $this->load->view('header'); ?>
	<title>Electricon</title>
</head>
<body>
	<header>
		 <?php $this->load->view('menu'); ?>
	</header>
	<br>
<h3 class="grave"><i class="fas fa-sun"></i> <i class="fas fa-solar-panel"></i></h3>
<section>
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-6">
  				<center><h2><i class="fa fa-phone-alt"></i> Contáctanos</h2>
  				<img src="<?=$base_url?>/recu/img/energy.png" class="img-fluid" width="250">
  				<br><br>
  				<h5>4ta. Calle 2-42 Zona 1 Totonicapán</h5>
  				<h5>Teléfonos: 77661648 - 53077639</h5></center>
  			</div>
  			<div class="col-sm-6">
  				<center><h2><i class="fa fa-envelope"></i> Envíanos un mensaje</h2></center>
  				<form class="needs-validation"  enctype="multipart/form-data" action="<?=$base_url?>/Contacto" method="POST" novalidate>
  					<label><i class="fa fa-user-tie"></i> Nombre Completo</label>
					  <input type="text" class="form-control" name="nombre" id="nombre" required>
					  <label><i class="fa fa-mobile-alt"></i> Teléfono</label>
					  <input type="text" class="form-control" name="telefono"id="telefono" required/>
					  <label><i class="fa fa-envelope"></i> Correo Electrónico</label>
					  <input type="email" class="form-control" name="correo" id="correo" required/>
					  <label><i class="fa fa-comments"></i> Mensaje</label>
					  <textarea name="mens" id="mens" cols="30" rows="5" class="form-control" required></textarea>
					  <br>
					  <div>
					  	<center><input onclick="mensaje()" type="submit" value="Enviar" id="guardar" name="guardar" class="btn btn-primary botones"/></center>
					  </div>
  				</form>
  			</div>
  		</div>
  </section>
<footer><?php $this->load->view('footer') ?></footer>
<script> AOS.init(); </script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body> 
</html>