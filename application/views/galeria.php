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
			<h1><i class="fa fa-picture-o"></i> Galería</h1>
		</center>
	</div>
	<section>
    <div class="card-columns" id="fotos"></div>
  <script>
    var imagenes = ['electricon0','electricon1','electricon2','electricon3','electricon4','electricon5','electricon6','electricon7','electricon8', 'electricon9', 'electricon10', 'electricon11', 'electricon12', 'electricon13', 'electricon14', 'electricon15', 'electricon16', 'electricon17','electricon18','electricon19','electricon20','electricon21','electricon22','electricon56', 'electricon57', 'electricon58', 'electricon59', 'electricon60', 'electricon61', 'electricon62','electricon63','electricon19','electricon20','electricon21','electricon22','electricon23','electricon24','electricon25','electricon26', 'electricon64', 'electricon65', 'electricon66', 'electricon67', 'electricon68', 'electricon69', 'electricon70', 'electricon71', 'electricon72','electricon73','electricon74','electricon75','electricon76','electricon77','electricon78','electricon79','electricon80','electricon81','electricon23','electricon24','electricon25','electricon26', 'electricon27', 'electricon28', 'electricon29', 'electricon30', 'electricon31', 'electricon32', 'electricon33', 'electricon34', 'electricon35','electricon36','electricon37','electricon38','electricon39','electricon40','electricon41','electricon42','electricon42','electricon44', 'electricon45', 'electricon46','electricon47','electricon48','electricon49','electricon50','electricon51','electricon52','electricon52','electricon54', 'electricon55','electricon82','electricon83','electricon84','electricon85', 'electricon86', 'electricon87', 'electricon88','electricon89','electricon90', 'electricon91', 'electricon92','electricon93','electricon94'];
    var fotos = document.getElementById('fotos');

    for(foto of imagenes){
      fotos.innerHTML += ` 
      <div class="card">
        <a data-toggle="modal" data-target="#id${foto}">
          <img class="card-img-top" src="<?=$base_url?>/recu/img/${foto}.jpeg">
        </a>
      </div>
      <div class="modal fade" id="#id${foto}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <button type="button" class="close mr-4" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <img class="img-fluid rounded" src="<?=$base_url?>/recu/img/${foto}.jpeg">
        </div>
      </div>`
    }
  </script>
<footer><?php $this->load->view('footer') ?></footer>
</body>
</html>