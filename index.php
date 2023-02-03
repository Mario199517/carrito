<?php
  session_start();  

  //MANDO A LLAMR A MI ARCHIVO JSON PARA RECORRERLOS
  $data = file_get_contents("app/datajson.json");
  $products = json_decode($data, true);
  $countCarts = count($products['items']) -1;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">    
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
  </head>
  <body>
    
  <!---HEADER-->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-9 col-md-3 text-center">
            <img class="img-logo" src="assets/img/logo.png" alt="America Car Rental">
          </div>
          <div class="col-3 col-md-9 reservsemenu">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">                 
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Vehiculos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Sucursales</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Políticas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="carrito.php"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                    </ul> 
                  </div>
                </div>
            </nav>
          </div>
        </div>
      </div>        
    </header>


    <!---CONTENIDO-->
    <section class="section1">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <h1 class="text-1 text-center">Autos disponibles para ti</h1>
            <p class="text-2 text-center">Encuentra el auto perfecto al mejor precio del mercado</p>
            <div class="splide" role="group">
              <div class="splide__track">
                <ul class="splide__list">
                  <?php
                    for ($i=0; $i <= $countCarts; $i++) {  ?>
                       <li class="splide__slide">
                          <div class="contenedor">
                            <div class="text-center">
                                <img class="img-cart" src="assets/img/<?= $products['items'][$i]['img']?>" alt="">
                            </div>                      
                            <p class="name_cart"><?= $products['items'][$i]['name'] ?></p>
                            <div class="row">
                                <div class="col-8 col-sm-8 col-md-8">
                                  <p class="colorgray"><i class="fa fa-leaf"></i> <?= $products['items'][$i]['type'] ?> </p>
                                  <p class="colorgray"><i class="fa fa-snowflake-o"></i> <?= $products['items'][$i]['typeAc'] ?> </p> 
                                  <p class="colorgray"><i class="fa fa-arrows"></i> <?= $products['items'][$i]['transmision'] ?></p>
                                </div>
                              <div class="col-4 col-sm-4 col-md-4 text-end">
                                  <p class="colorgray">ECMR</p>
                                  <p class="colorgray"><i class="fa fa-briefcase"></i> <?= $products['items'][$i]['pax'] ?></p>
                                  <p class="colorgray"><i class="fa fa-user-circle"></i> <?= $products['items'][$i]['pax'] ?></p>
                              </div>
                            </div>
                            <p class="price">$<?= $products['items'][$i]['price'] ?> USD</p>
                            <button data-name="<?= $products['items'][$i]['name'] ?>" data-item="<?= $i ?>" data-price="<?= $products['items'][$i]['price'] ?>" class="addcart"><i class="fa fa-plus"></i> RESERVAR AUTO</button>
                          </div>
                        </li>
                  <?php  }  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Inicio</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Vehiculos</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Ofertas</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Sucursales</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Políticas</a></li>
        </ul>
        <p class="text-center text-muted">© 2022 Company, Inc</p>

        <!--ELEMTNO DE LOADDING PAGE-->
        <div class="loading">
          <div class="loader loader--style5" title="4">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
              <rect x="0" y="0" width="4" height="10" fill="#fff">
                <animateTransform attributeType="xml"
                  attributeName="transform" type="translate"
                  values="0 0; 0 20; 0 0"
                  begin="0" dur="0.6s" repeatCount="indefinite" />
              </rect>
              <rect x="10" y="0" width="4" height="10" fill="#fff">
                <animateTransform attributeType="xml"
                  attributeName="transform" type="translate"
                  values="0 0; 0 20; 0 0"
                  begin="0.2s" dur="0.6s" repeatCount="indefinite" />
              </rect>
              <rect x="20" y="0" width="4" height="10" fill="#fff">
                <animateTransform attributeType="xml"
                  attributeName="transform" type="translate"
                  values="0 0; 0 20; 0 0"
                  begin="0.4s" dur="0.6s" repeatCount="indefinite" />
              </rect>
            </svg>
          </div>
        </div>

        <!--TOP-->
        <div class="toppage"><i class="fa fa-chevron-up"></i></div>
      </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>