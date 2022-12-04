<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$mensaje = isset($mensaje) ? $mensaje : "";
if (count($arr) < 1) {

  $mensaje = 
"<script>alertify.set('notifier','position', 'top-right');alertify.error('No hay ningún mensaje registrado');</script>";
}

$htmltrow = "<tr>
        <td>%s</td> 
        <td>%s</td>
        <td>%s</td>  
        <td>%s</td>
        <td>%s</td>
        <td><a href=\"${base_url}/Contacto/darBajaMensaje/%s\">Dar baja</a></td>
       </tr>\n";
$htmltrows = "";

foreach ($arr as $a) {
  $id_mensaje = $a['id_mensaje'];
  $htmltrows .= sprintf($htmltrow, 
    $a['nombre'], $a['telefono'], $a['correo'], $a['fecha'], $a['mensaje'], $a['id_mensaje']);
}
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
<h3 class="grave">Mensajes Ingresados <i class="fas fa-sun"></i></h3>
<hr>
<section>
	<div class="contariner">
	<div class="table-responsive-sm">
    <table class="table table-striped table-bordered">
    <thead> 
      <tr id="letra_info">
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Fecha</th>
        <th>Mensaje</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?=$htmltrows?>
    </tbody>
    </table>
    <div class="label label-danger label-md" onclick="$(this).hide(1000)"><?=$mensaje?></div>
  </div>
  </div>
</section>
<footer><?php $this->load->view('footer') ?></footer>
<script> AOS.init(); </script>
</body> 
</html>