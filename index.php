<?php 
session_start();
    if (!empty($_SESSION["usuario"])){
      $usuario = $_SESSION["usuario"];
     
      
    } else {
      header("Location: index.html");
      exit();
    }
    ?>

<!DOCTYPE html>

<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/stilos2.css">

  <title>TraveloveDgo</title>
  <link rel="shorcut icon" type="image/x-icon" href="img/logotra.png" >
</head>

<body>
  <nav class="navbar navbar-expand-md  fixed-top maine-menu">
    <div class="container">
      <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active"> <a class="nav-link" href="#">Inicio</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#about" tabindex="-1" aria-disabled="true">nosotros</a></li>
          <li class="nav-item"> <a class="nav-link" href="#activity" tabindex="-1" aria-disabled="true">destinos</a></li>
          
          <li class="nav-item"> <a class="nav-link" href="#testimonial" tabindex="-1" aria-disabled="true">Lugares</a></li>
          
          <li class="nav-item"> <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Contacto</a></li>
            <li class="nav-item"> <a class="nav-link" tabindex="-1" aria-disabled="true">Bienvenido  </a></li>
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid fh5co-home-banner">
    <div class="card"> <img class="card-img" src="img/banner1.jpg" width="500" alt="">
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title">Travelove Dgo
          </h2>
          <a href="#" class="btn">
            <svg width="201" height="51" viewBox="0 0 201 51">
              <defs>
                <style>
                .cls-1 {
                  fill: none;
                  stroke-width: 1px;
                  stroke: url(#linear-gradient);
                }
              </style>
              <linearGradient id="linear-gradient" x1="140.508" y1="50.5" x2="60.492" y2="0.5" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#6eb2ed"/>
                <stop offset="1" stop-color="#fff"/>
              </linearGradient>
            </defs>
            <rect id="Rounded_Rectangle_1" data-name="Rounded Rectangle 1" class="cls-1" x="0.5" y="0.5" width="200" height="50" rx="20" ry="30"/>
          </svg>
        descubre</a> </div>
      </div>
    </div>
  </div>
  <div class="container-fluid fh5co-two-img">
    <div class="row">
      <div class="col-sm-6 pr-0 pl-0">
        <div class="card"> <img class="card-img" src="img/imgpri3.jpg" alt="">
          <div class="card-img-overlay"> </div>
        </div>
      </div>
      <div class="col-sm-6 pr-0 pl-0">
        <div class="card"> <img class="card-img" src="img/imgpri2.jpg" alt="">
          <div class="card-img-overlay"> </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid fh5co-recent-work">
    <div class="container contact-pop">
      <div class="row">
        <div class="col-md-6  pr-0">
          <div class="card"> <img class="card-img w-100" src="img/Index/foto1.png" alt="">
            <div class="card-img-overlay"> </div>
          </div>
        </div>
        <div class="col-md-6 pl-0" id="about">
          <div class="content">
            <h3>Travelove Dgo</h3>
            <h4>Agencia de viajes</h4>
            <hr />
            <p>¡Queremos que sientas el valor de la vida a través de nuestros viajes!
              Te ofrecemos experiencias únicas e inolvidables!
              </p>
            <br>
            <br>
            
            <a href="#" class="btn">CONTACTO</a> </div>
          </div>
        </div>
      </div>


      <div class="container recent" id="activity">
        <div class="row">
          <h2>Viajes recientes</h2>
          <div class="owl-carousel owl-carousel2 owl-theme">
            <div>
              <div class="card"> <img class="card-img" src="img/Index/sliderman1.png" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title">MEXIQUILLO</h5>
                    <p class="card-text">Durango, Mexico</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="img/Index/sliderman2.png" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title">GRUTAS DE TOLANTONGO</h5>
                    <p class="card-text">Hidalgo, Mexico</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="img/Index/sliderman3.png" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title">PLAYA SAN FRANCISCO</h5>
                    <p class="card-text">Nayarit, Mexico</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="img/Index/sliderman4.png" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title">LA HABANA</h5>
                    <p class="card-text">La Habana, Cuba</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid recent fh5co-portfolio" id="portfolio">


    <style>
      


  
    </style>
  
    <div class="container">

      <div class="imglogoind">
        <img src="img/logotra.png" class="logomisi" width="150"  alt="" srcset="">
        
      </div>
      
      <h2 class="nosotros">  <center> Nosotros </center></h2>

      <p class="mision"> <H2>  Misión: </H2> <h4>Crear momentos de felicidad y emoción a través de la experiencia de viajar, volver inmortales los recuerdos de cada viaje en cada uno de nuestros clientes.</h4> </p>  
      
      <p class="vision">  <h2>Visión:</h2>  <h4>Liderar en el mercado estatala través del reconocimiento de nuestros clientes por rindar las mejors experiencias al cliente,con vajes llenos de magia y diversión.</h4> </p>
    
      <p class=" infoempresa"> <h2>Informacion de la empresa:</h2> </p>
    </div>

  </div>


</div>

  <div class="container-fluid fh5co-about-me" id="testimonial">
    <div id="my-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="card"> <img class="card-img d-block w-100" src="img/Index/banneropi.png" alt="">
          <div class="card-img-overlay">
            <h2>Opiniones de viajeros Travelove</h2>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-md-block"> <img src="assets/img/quote-icon.png" alt="">
            <p>Excelente servicio, el trato por parte de los encargados es muy bueno, te hacen pasar experiencias muy agradables.
              Recomendado 100% </p>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="carousel-caption d-md-block"> <img src="assets/img/quote-icon.png" alt="">
            <p>Excelente servicio y muy linda actitud del staff, sin duda una gran decisión el tomar el tour al Carnaval de Mazatlán (express)</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-md-block"> <img src="assets/img/quote-icon.png" alt="">
            <p>El ambiente es inigualable, sus staff amables y sus precios accesibles</p>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" > <img src="img/Index/opi1.png" alt=""> <span>Marisol Ibarra</span> </li>
        <li class="active" data-target="#my-carousel" data-slide-to="1" aria-current="location"> <img src="img/Index/opi2.png" alt=""> <span>Karla Morales</span> </li>
        <li data-target="#my-carousel" data-slide-to="2"> <img src="img/Index/opi3.png" alt=""> <span>Jose Alonso Macias</span> </li>
      </ol>
    </div>
  </div>
  <div class="container-fluid fh5co-insta-feed activity">
    <div class="container recent">
      <div class="row mb-5 pb-5">
        <div class="col-lg-6">
          <div class="twit-box">
            <div class="media mb-3"> <img class="align-self-start mr-3 rounded-circle" src="assets/img/imgpri1.jpg" alt="">
              <div class="media-body">
                <h5 class="mb-0 mt-3">TraveloveDgo</h5>
                <p>@TraveloveDgo</p>
              </div>
            </div>
            <p class="text-justify"> «Todo soñador sabe que es perfectamente posible sentir nostalgia por un lugar en el que nunca se ha estado, quizás más nostalgia que por algo conocido» Judith Thurman
            </p>
            <div class="clearfix"> <a href="https://twitter.com/TraveloveDgo" target="_blank" class="btn btn-primary mt-2 float-right">Seguir</a> </div>
          </div>
        </div>
        <div class="col-lg-6 feed-caro">
          <h2>Historias de Instagram</h2>
          <div class="owl-carousel owl-carousel4 owl-theme">
            <div>
              <div class="card"> <img class="card-img" src="img/Index/prueba1.jpg" alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="img/Index/tw2.png"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <h2 class="text-center d-block">Encuentranos en las redes sociales</h2>
      <div class="row social-links">
        <ul class="nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="https://www.facebook.com/TraveloveDgo/"><img src="assets/img/facebook.png" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="https://twitter.com/TraveloveDgo"><img src="assets/img/twitter.png" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="https://www.instagram.com/travelovedgo/?hl=es-la"><img src="img/Index/intsalogo.png" width="25"   alt=""></a> </li>
          
        </ul>
      </div>
    </div>
  </div>
  <footer class="container-fluid p-0 pr-0">
    <div class="row mr-0 ml-0">
      <div class="col-md-6 pr-0 pl-0 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.0746857796157!2d-104.67147168837784!3d24.028431326660254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc82347b8ba4b%3A0xc45f040fbe8df428!2sCalle%20Gral.%20Esteban%20Coronado%20420%2C%20Zona%20Centro%2C%2034000%20Durango%2C%20Dgo.!5e0!3m2!1ses!2smx!4v1591217679963!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="col-md-6 content-us" id="">
        <div class="contact-form" id="contact">
          <h3 class="text-uppercase">Contactanos</h3>
          <input type="text" class="form-control" placeholder="Nombre y apellidos">
          <input type="text" class="form-control" placeholder="Correo electronico">
          <textarea class="form-control" placeholder="Tu mensaje"></textarea>
          <button type="submit">Enviar</button>
          
        </div>
        <p >  </p>
      </div>
    </div>
    <div class="copy pt-4 pb-4">
      <p>&copy; Copyright (c) 2020 </a>  &nbsp;  |  &nbsp; Travelove Dgo &nbsp; | &nbsp;  Todos los derechos reservados</p>
         

      <div class>


      </div>


    </div>

  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="assets/js/jquery-3.3.1.slim.min.js"></script> 
  <script src="assets/js/popper.min.js" ></script> 
  <script src="assets/js/bootstrap.min.js"></script> 
  <script src="assets/js/owl.carousel.min.js"></script> 
  <script src="assets/js/main.js"></script>

</body>
</html>

