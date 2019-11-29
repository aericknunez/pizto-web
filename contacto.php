<?php 
session_start(); 


if($_REQUEST["type"] == 1){ $type = "Busca un sistema basico"; }
if($_REQUEST["type"] == 2){ $type = "Busca un sistema Profesional"; }
if($_REQUEST["type"] == 3){ $type = "Busca un sistema premium"; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Siempre es un placer saber de usted</title>

    <link rel="stylesheet" href="demo/assets/css/font-awesome.css">
    <link href="demo/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="demo/assets/css/mdb.min.css" rel="stylesheet">
    <link href="demo/assets/css/galeria.css" rel="stylesheet">

    <style>body { overflow-x: hidden; padding-left: 15px; }</style>

</head>
<body class="hidden-sn navy-blue-skin">

<main>



<h2 class="h1-responsive font-weight-bold text-center">P&oacutengase en contacto</h2>
<p class="text-center w-responsive mx-auto">Si desea contratar nuestros servicios, tiene una duda o simplemente quiere saber mas acerca de nosotros, no dude en escribirnos, es un placer conocer de usted</p>

<!-- Section: Contact v.3 -->
<section class="contact-section my-5">
<div id="result"></div>
  <!-- Form with header -->
  <div class="card">

    <!-- Grid row -->
    <div class="row">








   

      <!-- Grid column -->
      <div class="col-lg-8">

        <div class="card-body form">
<form class="text-center border border-light p-3" id="form-contacto" name="form-contacto">

          <!-- Header -->
          <h3 class="mt-4"><i class="fa fa-envelope-o pr-2"></i>Escr&iacutebanos:</h3>

          <!-- Grid row -->
          <div class="row">


            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="nombre"  name="nombre" class="form-control">
                <label for="nombre" class="">* Nombre</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="email" name="email" class="form-control">
                <label for="email" class="">* Email</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="telefono" name="telefono" class="form-control">
                <label for="telefono" class="">Telefono</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="empresa" name="empresa" class="form-control">
                <label for="empresa" class="">Empresa</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->
          <input type="hidden" id="extra" name="extra" value="Enviado desde Pizto para informacion de sistema. <?php echo $type; ?>">
          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
                <textarea id="mensaje" name="mensaje" class="form-control md-textarea" rows="3"></textarea>
                <label for="mensaje">* Mensaje</label>
                
                <button type=submit class="btn-floating btn-lg blue" id="btn-contacto" name="btn-contacto"> <i class="fa fa-paper-plane-o "></i></button>
                
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->
</form>
        </div>

      </div>
      <!-- Grid column -->














      <!-- Grid column -->
      <div class="col-lg-4">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">Informaci&oacuten de contacto</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fa fa-map-marker  pr-2"></i>Urb La Mascota Cl 2 No 231 
Col San Benito San Salvador 
El Salvador</p>
            </li>
            <li>
              <p><i class="fa fa-phone pr-2"></i>WhatsApp: +503 7671 0797</p>
            </li>
            <li>
              <p><i class="fa fa-envelope pr-2"></i>Email: info@pizto.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic">
                <i class="fa fa-facebook-official"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic">
                <i class="fa fa-instagram"> </i>
              </a>
            </li>

          </ul>
          <hr class="hr-light my-4">
          <a href="./" class="btn btn-indigo"><i class="fa fa-arrow-left mr-1"></i> REGRESAR</a>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</section>
<!-- Section: Contact v.3 -->





</main>  


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
