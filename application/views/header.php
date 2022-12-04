<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="<?=$base_url?>/recu/css/bootstrap.min.css" />
	<link rel="icon" href="<?=$base_url?>/recu/img/el.ico">
	<link rel="stylesheet" type="text/css" href="<?=$base_url?>/recu/css/aos.css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <script type="text/javascript" src="<?=$base_url?>/recu/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="<?=$base_url?>/recu/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=$base_url?>/recu/js/aos.js"></script>
	<script src="https://kit.fontawesome.com/0a34a37b35.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <meta name="google-site-verification" content="MoSK0YqnaCfNp7kIYDFuF9EY-JKj7uiBAJR0MNcr8-0" />
  <meta property="og:url"                content="https://www.electriconenergy.com.gt/">
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="Electricon Energy" />
	<meta property="og:description"        content="La energía renovable está en auge, ya que la innovación reduce los costos y comienza a cumplir la promesa de un futuro de energía limpia." />
	<meta property="og:image"              content="<?=$base_url?>/recu/img/13.png" />
	<meta property="fb:app_id"            content="207621439250284"/>

<style type="text/css">
	body {
      font-family: sans-serif,Quicksand !important;
  	}

  	.estilo{
  		background: #003594;
  	}
  	.espacio{
  		padding-top: 4rem;
  	}

  	li{
  		text-indent: 5px;
  		font-weight: bold;
  	}

  	/*estilo de redes sociales*/

	.fondo{
		background-color: #6DC90B;
	}


.ul1 {
  position:absolute;
  top:18%;
  left:50%;
  transform:translate(-50%, -50%);
  display:flex;
  margin:0;
  padding:0;
}

.ul1 .li1 {
  list-style:none;
  margin:0 5px;
}

.ul1 .li1 .a1 .fa {
  font-size: 40px;
  color: #262626;
  line-height:80px;
  transition: .5s;
  padding-right: 14px;
}

.ul1 .li1 .a1 span {
  padding:0;
  margin:0;
  position:absolute;
  top: 30px;
  color: #262626;
  letter-spacing: 4px;
  transition: .5s;
}

.ul1 .li1 .a1 {
  text-decoration: none;
  display:absolute;
  display:block;
  width:210px;
  height:80px;
  background: #fff;
  text-align:left;
  padding-left: 20px;
  transform: rotate(-30deg) skew(25deg) translate(0,0);
  transition:.5s;
  box-shadow: -20px 20px 10px rgba(0,0,0,.5);
}
.ul1 .li1 .a1:before {
  content: '';
  position: absolute;
  top:10px;
  left:-20px;
  height:100%;
  width:20px;
  background: #1D37FF;
  transform: .5s;
  transform: rotate(0deg) skewY(-45deg);
}
.ul1 .li1 .a1:after {
  content: '';
  position: absolute;
  bottom:-20px;
  left:-10px;
  height:20px;
  width:100%;
  background: #000CA4;
  transform: .5s;
  transform: rotate(0deg) skewX(-45deg);
}

.ul1 .li1 .a1:hover {
  transform: rotate(-30deg) skew(25deg) translate(20px,-15px);
  box-shadow: -50px 50px 50px rgba(0,0,0,.5);
}

.ul1 .li1:hover .fa {
  color:#fff;
}

.ul1 .li1:hover span {
  color:#fff;
}

.ul1 .li1:hover:nth-child(1) .a1{
  background: #3b5998;
}
.ul1 .li1:hover:nth-child(1) .a1:before{
  background: #365492;
}
.ul1 .li1:hover:nth-child(1) .a1:after{
  background: #4a69ad;
}

.ul1 .li1:hover:nth-child(2) .a1{
  background: #00aced;
}
.ul1 .li1:hover:nth-child(2) .a1:before{
  background: #097aa5;
}
.ul1 .li1:hover:nth-child(2) .a1:after{
  background: #53b9e0;
}

.ul1 .li1:hover:nth-child(3) .a1{
  background: #dd4b39;
}
.ul1 .li1:hover:nth-child(3) .a1:before{
  background: #b33a2b;
}
.ul1 .li1:hover:nth-child(3) .a1:after{
  background: #e66a5a;
}

.ul1 .li1:hover:nth-child(4) .a1{
  background: #e4405f;
}
.ul1 .li1:hover:nth-child(4) .a1:before{
  background: #d81c3f;
}
.ul1 .li1:hover:nth-child(4) .a1:after{
  background: #e46880;
}
/*Estilo de Carrusel*/
.carousel-indicators li {
width: 10px;
height: 10px;
border-radius: 100%;
}

.altura{
  height: 500px;
}


@media (max-width: 600px) {
 .altura {
   height: 200px;
  }
} 

/*estilos del carrusel*/
.carousel-caption {
  bottom: 350px;
}
.carousel-caption h5 {
  font-size: 45px;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: 10px;
  font-family: Quicksand;
  font-weight: bold;
}
.carousel-caption p {
  width: 60%;
  margin: auto;
  font-size: 18px;
  line-height: 1.4;
  font-family: poppins;
  font-weight: bold;
}
.carousel-caption a {
  text-transform: uppercase;
  background: #262626;
  padding: 10px 20px;
  display: inline-block;
  color: #fff;
  margin-top: 10px;
}
.navbar-nav a {
  font-family: poppins;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: bold;
}
.navbar-light .navbar-brand {
  color: #fff;
  font-size: 25px;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 2px;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
  color: #fff;
}
.navbar-light .navbar-nav .nav-link {
  color: #fff;
}
.navbar-nav {
  text-align: center;
}
.nav-link {
  padding: .2rem 1rem;
}
.nav-link.active, .nav-link:focus {
  color: #fff;
}

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
  color: #fff;
}

/*divs*/
.somos{
  background-image: url("<?=$base_url?>/recu/img/pan.jpg");
}

.quines{
  text-align: center;
  color: #fff;
  font-weight: bold;
  letter-spacing: 2px;
}
.dato{
  color: #fff;
  font-weight: bold;
  text-align: center;
}

.nuestro{
  text-align: center;
  color: #003594;
  font-weight: bold;
  letter-spacing: 2px;
}

.numero{
  font-size: 150px;
  color: #000B73;
  opacity: 50%;
  font-weight: bold;
  font-family: Quicksand; 
  text-align: center;
}

.calen{
  font-weight: bold;
  text-align: center;
  color: #FF0000;
}

.presion{
  background: #E6E6E6;
}
.derecha{
  font-weight: bold;
}
.num{
  font-size: 150px;
  color: #000B73;
  font-weight: bold;
  font-family: Quicksand; 
  text-align: center;
}

.num20{
  font-size: 125px;
  color: #000B73;
  font-weight: bold;
  font-family: Quicksand; 
  text-align: center;
}

@media (max-width: 600px) {
 .num {
   font-size: 80px;
  }
} 

@media (max-width: 600px) {
 .num20 {
   font-size: 80px;
  }
} 

.grave{
  text-align: center;
  font-weight: bold;
}
/*footer*/
.sacate{
  background: url("<?=$base_url?>/recu/img/sacate.png");
  background-position: center;
  background-repeat: no-repeat;
  margin-bottom: -48px;
  padding: 12rem;
}

.ir-regresa{
  display: inline-block;
  padding: 20px;
  background-color: #00B22A;
  font-size: 20px;
  color: #fff;
  cursor: pointer;
  position: fixed;
  bottom: 20;
  right: 0;
}


.wats{
  display: inline-block;
  padding: 15px;
  background-color: #00B22A;
  font-size: 30px;
  color: #fff;
  cursor: pointer;
  position: fixed;
  bottom: 20;
  right: 0;
}
.panel {
  background-color: #12C300; 
  align-content: right; 
}
.fondopanel{
  background: url('<?=$base_url?>/recu/img/foco.png');
  background-size: 45%;
  background-repeat: no-repeat;
  background-position: center;

}
.enuncia{
  text-align: center;
  color: #FF0000;
  font-weight: bold;
  padding-top: 1rem;
}
.encuado{
  text-align: center;
  color: blue;
  font-weight: bold;
}
.servi{
  text-align: center;
  color: #0057B8;
  font-weight: bold;
}
.redondo{
  border-radius: 200px;
}
.sucurs{
  background-color: #003594;
}
.letrasu{
  color: #fff;
  font-weight: bold;
}
.datossu{
  color: #fff;
  text-align: center;
}
.bor5{
  border-radius: 25px;
}
.funciona{
  text-align: center;
  color: #22BF31;
  font-weight: bold;
}
.pie{
  font-weight: bold;
  text-align: center;
}
.solito{
  width: 250px;
}
.cantactanos{
  background: url('<?=$base_url?>/recu/img/pan.jpg');
   background-repeat: no-repeat;
  background-position: center;
}

.letraConta{
  color: #fff;
  font-weight: bold;
}

.displayNone{
  display: none;
}
</style>