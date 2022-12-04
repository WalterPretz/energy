<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark fixed-top estilo">
	<div class="container">	
	  <img src="<?= base_url('recu/img/blanco.png')?>" style="width:125px">
	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	  <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?=$base_url?>">Inicio<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?=$base_url?>/Inicio/acerca">Acerca de</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?=$base_url?>/Galeria">Galería</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?=$base_url?>/Contacto">Contacto</a>
	      </li>
	    </ul>
	  </div>
	</div>
</nav>
	