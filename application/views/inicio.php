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
	<section>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" dat  a-slide-to="3"></li>
		  </ol>
		  <div class="carousel-inner altura">
		    <div class="carousel-item active">
		    <video onloadedmetadata="this.muted=true" class="d-block w-100 img-fluid"  autoplay loop alt="First slide"><source src="<?=$base_url?>/recu/img/electri.mp4"></video>
		      <div class="carousel-caption d-none d-md-block">
					<h5 class="animated bounceInRight" style="animation-delay: 1s"><img class="d-block w-100 img-fluid" src="<?=$base_url?>/recu/img/blanco.png" alt="Second slide"></h5>
				</div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100 img-fluid" src="<?=$base_url?>/recu/img/locales.jpg" alt="Second slide">
		      <div class="carousel-caption d-none d-md-block">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">Energía Renovable</h5>
					<p class="animated bounceInLeft" style="animation-delay: 2s">La energía renovable está en auge, ya que la innovación reduce los costos y comienza a cumplir la promesa de un futuro de energía limpia.</p>
				</div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100 img-fluid" src="<?=$base_url?>/recu/img/evidencia1.jpg" alt="Third slide">
		      <div class="carousel-caption d-none d-md-block">
					<h5 class="animated slideInDown" style="animation-delay: 1s">Calentadores Solares</h5>
					<p class="animated fadeInUp" style="animation-delay: 2s">Con sistema de Gravedad y Presión.</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="https://wa.me/50247475313?text=Hola necesito información sobre calentadores solares" target="_blank">Más Información</a></p>
				</div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100 img-fluid" src="<?=$base_url?>/recu/img/evidencia4.jpg" alt="Forth slide">
		      <div class="carousel-caption d-none d-md-block">
					<h5 class="animated zoomIn" style="animation-delay: 1s">Páneles Solares</h5>
					<p class="animated fadeInLeft" style="animation-delay: 2s">Ayuda a reducir un 80% de tu consumo de energía electrica en tu factura.</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="https://wa.me/50247475313?text=Hola necesito información sobre los páneles solares" target="_blank">Más Información</a></p>
				</div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>
	<a href="https://wa.me/50247475313?text=Hola necesito información" class="wats fa fa-whatsapp" target="_blank"></a>
	<section>
		<div class="somos">
			<br><br><br>
			<h1 class="quines" data-aos="zoom-in">¿Quienes Somos?</h1>
			<br>
			<h4 class="dato container" data-aos="fade-up">Somos una empresa enfocada a la implementación y promoción del ahorro energético por medio de calentadores solares y páneles solares, asi también Instalación eléctrica empresarial.</h4>
			<br><br><br>
		</div>
	</section>
	<br>
	<section>
		<div>
			<br>
			<h1 class="nuestro" data-aos="fade-right"><i class="fas fa-solar-panel"></i> Nuestos Productos <i class="fas fa-sun"></i></h1>
			<br>
			<div class="container">
			  <div class="row justify-content-center">
			    <div class="col-sm-6 col-md-6 col-lg-6 imagen">
			    	<img class="img-fluid" data-aos="fade-down" src="<?=$base_url?>/recu/img/calentadorenergy.png">
			    </div>
			    <div class="col-sm-6 col-md-6 col-lg-6">
			    	<div class="row">
			    		<div class="col-2" data-aos="fade-up-right">
			 				<h1 class="numero" >1</h1>
			    		</div>
			    		<div class="col-10" data-aos="fade-right">
			    			<h2 class="calen">Calentador de sistema de Gravedad</h2>
			    			<br>
			    			<h4><i class="fas fa-bahai"></i> Funciona por Gravedad</h4>
			    			<h4><i class="fas fa-bahai"></i> 4 Capacidades</h4>
			    		</div>
			    		<br>
			    	</div>
			    	<br>
			    	<center><a href="<?=$base_url?>/Gravedad" class="btn btn-success botones" data-aos="fade-down-left">Más Detalle  <i class="fas fa-angle-right derecha"></i></a></center>
			    </div>
			  </div>
			</div>
		</div>
		<br>
	</section>
	<section>
		<div class="presion">
			<br>
			<div class="container">
			  <div class="row justify-content-center">
			    <div class="col-sm-6 col-md-6 col-lg-6 imagen">
			    	<img class="img-fluid" data-aos="fade-down" src="<?=$base_url?>/recu/img/gravedad12.png">
			    </div>
			    <div class="col-sm-6 col-md-6 col-lg-6">
			    	<div class="row">
			    		<div class="col-2" data-aos="fade-up-right">
			 				<h1 class="numero" >2</h1>
			    		</div>
			    		<div class="col-10" data-aos="fade-right">
			    			<h2 class="calen">Calentador de sistema de Presión</h2>
			    			<br>
			    			<h4><i class="fas fa-bahai"></i> Funciona por Presión</h4>
			    			<h4><i class="fas fa-bahai"></i> 3 Capacidades</h4>
			    			<h4><i class="fas fa-bahai"></i> Cuenta con serpentín de cobre</h4>
			    		</div>
			    		<br>
			    	</div>
			    	<br>
			    	<center><a href="<?=$base_url?>/Presion"  class="btn btn-success botones" data-aos="fade-down-left">Más Detalle  <i class="fas fa-angle-right derecha"></i></a></center>
			    </div>
			  </div>
			</div>
		</div>
	</section>
	<br><br>
	<section>
		<center>
			<h1><i class="fa fa-solar-panel"></i> Páneles solares</h1>
			<strong><h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">Páneles Solares conectados a la Red Eléctrica</h2></strong>
		</center>
		<br>
		<div class="container-fluid" data-aos="fade-down">
			<div class="row">
				<div class="col-sm-4 panel"><br>
					<img src="<?=$base_url?>/recu/img/panel10.png" class="img-fluid" alt="" width="300">
				</div>
				<div class="col-sm-8 fondopanel">
					<h2 class="enuncia">Reduce el costo de tu factura eléctrica del 80 a 90%</h2>
					<div class="row">
						<div class="col-6">
							<h3 class="encuado">Antes</h3>
							<center>
								<img src="<?=$base_url?>/recu/img/recibo.png" alt="" class="img-fluid" width="300">
							</center>
						</div>
						<div class="col-6">
							<h3 class="encuado">Despúes</h3>
							<center><img src="<?=$base_url?>/recu/img/recibo2.png" alt="" class="img-fluid" width="300"></center>
						</div>
					</div>
					<br>
				</div>
			</div>	
			 <center><a href="<?=$base_url?>/Contacto" class="btn btn-success botones">Solicitar Info</a></center>		
		</div>
	</section>
	<br><br>
	<hr>
	<br>
	<section>
		<center>
			<h1 class="servi" data-aos="fade-up"><i class="fa fa-plug"></i> Nuestros Servicios</h1>
			<div class="container-fluid fondoser">
			<div class="row">
				<div class="col-sm-4" data-aos="fade-up">
					<br>
					<h3 class="servi">Instalación de Calentadores y Páneles Solares</h3>
					<br>
					<img src="<?=$base_url?>/recu/img/evidencia.jpg" alt="" class="img-fluid redondo" width="400">
				</div>
				<div class="col-sm-4"data-aos="fade-up">
					<img src="<?=$base_url?>/recu/img/servi.png" alt="" class="img-fluid" width="400">
				</div>
				<div class="col-sm-4" data-aos="fade-up">
					<br>
					<h3 class="servi" data-aos="fade-up">Instalación Eléctrica Empresarial</h3>
					<br>
					<img src="<?=$base_url?>/recu/img/evidencia1111.jpg" alt="" class="img-fluid redondo" width="400">
				</div>
			</div>
		</div>
		</center>
	</section>
	<section>
		<div class="container-fluid sucurs">
			<center>
				<br>
				<h1 class="letrasu" data-aos="fade-up">Sala de Ventas</h1>
			</center>
			<div class="row" data-aos="fade-up">
				<div class="col-sm-2 col-md-2">
				</div>
				<div class="col-sm-4 col-md-4" >
					<center><img src="<?=$base_url?>/recu/img/tienda.jpg" class="img-fluid bor5" width="400"></center>
                        <p class="datossu">4ta. Calle 2-42 Zona 1 Totonicapán</p>
                        <p class="datossu">Tel. 7766-1648</p>
                        <p class="datossu"><strong>Totonicapán, Guatemala</strong></p>
				</div>
				<div class="col-sm-4 col-md-4">
					<center><img src="<?=$base_url?>/recu/img/tienda2.jpg" class="img-fluid bor5" width="400"></center>
                        <p class="datossu">4ta Calle 15-83 Zona 3 Totonicapán</p>
                        <p class="datossu">4747-5313</p>
                        <p class="datossu"><strong>Totonicapán, Guatemnala</strong></p>
				</div>
				<div class="col-sm-2 col-md-2">
				</div>
			</div>
			<br>
		</div>
	</section>
	<br>
	<section class="container-fluid">
    <div data-aos="fade-up" data-aos-duration="1000">
      <h2 class="funciona"><i class="fa fa-cogs"></i> FUNCIONAMIENTO DEL CALENTADOR SOLAR</h2>
      <div class="row">
        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
          <center><h2>Calentador solar por presión</h2></center>
          <img src="<?=$base_url?>/recu/img/presion.jpg" class="img-fluid">
        </div>
         <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6" >
          <center><h2>Calentador solar por gravedad</h2></center>
          <img src="<?=$base_url?>/recu/img/gravedad.jpg"  class="img-fluid">
        </div>
      </div>
    </div>    
  </section>
  <br>
  <section>
  	<div class="container-fluid">
  		<div class="cantactanos" data-aos="zoom-in-down">
  			<div>
  			<center>
  				<br><br><br>
  				<h1 class="letraConta">Contáctanos</h1>
  				<br><br><br>
  			</center></div>
  		</div>	
  	</div>
  </section>
  <br><br>
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
  <br>
  <hr>
  <section>
  	<div class="container">
  		<h3 class="pie">UTILIZANDO ENERGÍA SOLAR</h3>
  		<h5 class="pie">CUIDAMOS EL MEDIO AMBIENTE</h5>
  		<center><img src="<?=$base_url?>/recu/img/soli.png" class="img-fluid solito"></center>
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