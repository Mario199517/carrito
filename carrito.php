<?php   
require_once 'app/controller.php';
$validaCart = '';
$classCarrito = new Carrito();
$showItemsCart =  $classCarrito -> showCart();
$total         =  $classCarrito -> totalPagar();

if($showItemsCart == ""){
    $validaCart  = '0';
}else{
    $validaCart  = '1';  
}

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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  </head>
  <body>
    
  <!---HEADER-->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-9 col-md-3 text-center">
           <a href="/"><img class="img-logo" src="assets/img/logo.png" alt="America Car Rental"></a>
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
                        <a class="nav-link"  href="/">Inicio</a>
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
            <div class="col-md-12">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidas</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $showItemsCart ?>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7">                
                    
                </div>
                <div class="col-md-5 ">                
                    <p class="totalDiv"><b>Total:</b> <?= $total ?>.00 USD</p>
                </div>
            </div>
        </div>
    </section>
    
    
    <section>
        <div class="container">
            <div class="row">
                <div class="contenedor-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nombre del tutor de la reserva</label>
                                <input type="text" class="form-control"  placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label  class="form-label">Email</label>
                                <input type="email" class="form-control"  placeholder="name@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Comentarios</label>
                        <textarea class="form-control"  rows="3"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn_booking">Reservar</button>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/main.js"></script>
    <script>
        ///CONFIGURACION DE DATABLES
        $(document).ready( function () {
            $('#table_id').DataTable();

            var countCart =  "<?= $validaCart ?>"
            if(countCart == "" || countCart == 0){
                Swal.fire({
                    text: 'No hay vehículos agregados en el carrito',                                        
                    confirmButtonText: 'OK',
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        Swal.fire('Saved!', '', 'success')
                        window.location.href = "/";
                    } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info')
                    }
                })
            }

        });
    </script>    
  </body>
</html>