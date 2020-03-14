<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ups! En este momento no estamos diponibles</title>
    <link rel="stylesheet" href="demo/pizto/assets/css/font-awesome.css">
    <link href="demo/pizto/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="demo/pizto/assets/css/mdb.min.css" rel="stylesheet">
    <link href="demo/pizto/assets/css/galeria.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 559px) {

      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 560px) and (max-width: 740px) {

      html,
      body,
      header,
      .view {
        height: 700px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .view {
        height: 600px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

  </style>
</head>

<body>


  <!-- Full Page Intro -->
  <div class="view">

    <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline autoplay
      muted loop>
      <source src="https://mdbootstrap.com/img/video/Lines-min.mp4" type="video/mp4">
    </video>

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-center white-text mx-5 wow fadeIn">

        <h1 class="display-4 mb-4">
          <strong>Volveremos Pronto!</strong>
        </h1>

        <!-- Time Counter -->
        <p id="time-counter" class="border border-light my-4"></p>


        <h4 class="mb-4">
          <strong>Estamos trabajando duro para finalizar nuestro mantenimiento. </strong>
        </h4>

        <h4 class="mb-4 d-none d-md-block">
          <strong>Estaremos de regreso muy pronto</strong>
        </h4>

        <a target="_blank" href="./" class="btn btn-outline-white btn-lg">Ir a la pagina principal
          <i class="fas fa-graduation-cap ml-2"></i>
        </a>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->



    <script type="text/javascript" src="demo/pizto/assets/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="demo/pizto/assets/js/popper.min.js"></script>

    <script type="text/javascript" src="demo/pizto/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="demo/pizto/assets/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <!-- Time Counter -->
  <script type="text/javascript">
    // Set the date we're counting down to
    var countDownDate = new Date("06-10-2019");
    countDownDate.setDate(countDownDate.getDate() + 3);

    // Update the count down every 1 second
    var x = setInterval(function () {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("time-counter").innerHTML = days + " Dias - " + hours + " Horas - " +
        minutes + " Minutos - " + seconds + " Segundos ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("time-counter").innerHTML = "EXPIRED";
      }
    }, 1000);

  </script>
</body>

</html>
