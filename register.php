<?php 
session_start();

if(isset($_REQUEST["type"])){
  $_SESSION["tiposistemanew"] = $_REQUEST["type"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Demo -  Pizto.com</title>

    <link rel="stylesheet" href="demo/assets/css/font-awesome.css">
    <link href="demo/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="demo/assets/css/mdb.min.css" rel="stylesheet">
    <link href="demo/assets/css/galeria.css" rel="stylesheet">

    <style>/* Required for full background image */

html,
body,
header,
.view {
  height: 100%;
}

@media (max-width: 740px) {
  html,
  body,
  header,
  .view {
    height: 1000px;
  }
}
@media (min-width: 800px) and (max-width: 850px) {
  html,
  body,
  header,
  .view {
    height: 650px;
  }
}

.top-nav-collapse {
  background-color: #3f51b5 !important;
}

.navbar:not(.top-nav-collapse) {
  background: transparent !important;
}

@media (max-width: 991px) {
  .navbar:not(.top-nav-collapse) {
    background: #3f51b5 !important;
  }
}

.rgba-gradient {
  background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
  background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%)));
  background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
}

.card {
  background-color: rgba(126, 123, 215, 0.2);
}

.md-form label {
  color: #ffffff;
}

h6 {
  line-height: 1.7;
}
body { overflow-x: hidden; padding-left: 5px; padding-right: 5px; }</style>

</head>
<body class="hidden-sn navy-blue-skin">

<div id="result"></div>
<!-- Main navigation -->
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="./">
        <strong>PIZTO</strong>
      </a>
<!--       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->

    </div>
  </nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('lib/img/261272_1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row mt-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Registrese Ahora! </h1>
            <?php if($_REQUEST["type"] == NULL){
            ?>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Para poder disfrutar de nuestro demo On Line s&oacutelo debe registrase, puede obtener una demostraci&oacuten con datos previamente instalados para que pueda ver su funcionamiento, o una versi&oacuten limpia para iniciar con datos y productos de su negocio.</h6>
            Tienes una cuenta?
            <a href="./demo/" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Iniciar Sesi&oacuten</a>
          
            <?php }
             if($_REQUEST["type"] == 1){
            ?>    
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h3>Sistema B&aacutesico</h3>
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">El sistema seleccionado es excelente para negocios pequeños aunque es muy potente al momento de llevar el control de gastos, ventas, inventarios y todo lo necesario para el crecimiento de su negocio.
            </h6> Cambiar:
            <a href="./register?type=2" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Profesional</a>
            <a href="./register?type=3" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Premium</a>
         
         <? } if($_REQUEST["type"] == 2){
            ?>    
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h3>Sistema Profesional</h3>
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Este es un sistema que puede manejar gran afluencia de clientes, ideal para un restaurante con una cantidad considerable de clientes. Y gran variedad de platillos.
            </h6> Cambiar:
            <a href="./register?type=1" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Básico</a>
            <a href="./register?type=3" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Premium</a>
         
         <? } if($_REQUEST["type"] == 3){
            ?>    
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <h3>Sistema Premium</h3>
            <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Con esta versión puede manejar todo su restaurante, no importa lo grande y complejo que este sea, esta será una herramienta que le ayudara a crecer en su negocio
            </h6> Cambiar:
            <a href="./register?type=1" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Básico</a>
            <a href="./register?type=2" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Profesional</a>
         <? } ?>


          </div>



          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <form id="form-registro" name="form-registro">

            <div class="card wow fadeInRight" data-wow-delay="0.3s">
              <div class="card-body">
                <!--Header-->
                <div class="text-center">
                  <h3 class="white-text">
                    <i class="fa fa-user white-text"></i> Registro:</h3>
                  <hr class="hr-light">
                </div>
                <!--Body-->
                
                <div class="md-form">
                  <i class="fa fa-user prefix white-text active"></i>
                  <input type="text" id="nombre" name="nombre" class="white-text form-control">
                  <label for="nombre" class="active">Nombre</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-envelope prefix white-text active"></i>
                  <input type="email" id="email" name="email" class="white-text form-control">
                  <label for="email" class="active">Email</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-lock prefix white-text active"></i>
                  <input type="password" id="pass" name="pass" class="white-text form-control">
                  <label for="pass">Password</label>
                </div>

                <div class="md-form">
                  <i class="fa fa-lock prefix white-text active"></i>
                  <input type="password" id="pass2" name="pass2" class="white-text form-control">
                  <label for="pass2" class="active">Repita su password</label>
                </div>

                <small class="white-text">** Asegurecce de usar un Email v&aacutelido, para validar su cuenta</small>
                <div class="text-center mt-4">
                  <button class="btn btn-indigo" id="btn-registro" name="btn-registro">Iniciar</button>
                  <hr class="hr-light mb-3 mt-4">                
                  <div class="inline-ul text-center d-flex justify-content-center">
                    <a class="p-2 m-2 tw-ic">
                      <i class="fa fa-twitter white-text"></i>
                    </a>
                    <a class="p-2 m-2 li-ic">
                      <i class="fa fa-linkedin white-text"> </i>
                    </a>
                    <a class="p-2 m-2 ins-ic">
                      <i class="fa fa-instagram white-text"> </i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            </form>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->

<!-- 
<main>



</main>  
 -->

    <script type="text/javascript" src="demo/assets/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="demo/assets/js/popper.min.js"></script>

    <script type="text/javascript" src="demo/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="demo/assets/js/mdb.min.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();

       </script>
       <script type="text/javascript" src="lib/main.js"></script>
</body>

</html>
