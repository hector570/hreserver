<?php
//session_start();
//require_once 'modelo/User.php';

?>
<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HReserver</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">HReserver</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menú
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#reserva">Reserva ya!</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#restaurante">Restaurantes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#caracteristicas">Características</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nosotros</a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#about">Compañia</a>
                  <a class="dropdown-item" href="#contact">Contacto</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">CUENTA</a>
            
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="admin/login.php">Inicia Sesión</a>
                <a class="dropdown-item" href="#contact">Regístrate</a>
              </div>

            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Inicio -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Bienvenido!</div>
          <div class=" text-uppercase">Reservar nunca fue tan fácil</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#caracteristicas">Cuentáme más</a>
        </div>
      </div>
    </header>
    <!--Reserva-->
    <section id="reserva" class="bg-secondary">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Restaurantes</h2>
            <h3 class="section-subheading ">En 2 pasos.
              <br>1.Elige donde quieres ira comer<br>2. Inicia Sesión<br> y listo!</h3>
          </div>
          <div class="col-md-3">
            <label for="restaurantes">Restaurantes</label>
            <select class="custom-select d-block w-100" id="restaurantes" required="">
              <option value="">Elige...</option>
            </select>

          </div>
          <div class="col-md-3">
            <label for="restaurantes">Fecha</label>
            <input type="date" class="form-control" id="fechas" placeholder="" value="" required="">
          </div>
          <div class="col-md-3">
            <label for="restaurantes">Hora</label>
            <select class="custom-select d-block w-100" id="horas" required="">
              <option value="">Seleccione hora disponible...</option>
              <option>Horas</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="restaurantes">Comensales</label>
            <select class="custom-select d-block w-100" id="comensales" required="">
              <option value="">--Comensales</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-4 mb-0">
        <div id="success"></div>
        <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">RESERVAR</button>
      </div>
    </section>

    <!-- Restaurantes Grid -->
    <section class="bg-light" id="restaurante">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Restaurantes</h2>
            <h3 class="section-subheading text-muted">De momento hay pocos. <br>La familia irá creciendo!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="restaurante-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-brule.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Brulé</h4>
              <p class="text-muted">Cocina de Autor</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-becook.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Becook</h4>
              <p class="text-muted">Cocina moderna</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-fourlions.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Four Lions Brewery</h4>
              <p class="text-muted">Cerveza artesana y más.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Caracteristicas -->
    <section id="caracteristicas" class="bg-warning">
      <div class="container ">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Características</h2>
            <h3 class="section-subheading text-muted">Esto es todo lo que somos.
              <br>De momento ;)</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Facilidad</h4>
            <p class="text-muted">
              <b>Para los Clientes.</b>
              <br>Con un simple registro y un formulario podrás reservar en nuestros restaurantes disponibles. No buscamos distracciones!
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Cercanía</h4>
            <p class="text-muted">
              <b>Para Restaurantes</b>
              <br>Si tenéis ideas para mejorar nuestros servicios no dudéis en decirlo. La clave de nuestro éxito sois vosotros.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa  fa-arrow-up fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Crecimiento</h4>
            <p class="text-muted">
              <b>Para todos.</b>Esto es el comienzo.Para todos Esto es el comienzo. Queremos aprender para ofrecer cada vez mejores
              opciones para todos vosotros.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Nosotros</h2>
            <h3 class="section-subheading text-muted">Estamos empezando poco a poco, paso a paso..</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2018</h4>
                    <h4 class="subheading">Este es nuestro año!</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
             
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Forma parte
                    <br>de nuestra
                    <br>Historia!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- LOGOS RESTAURANTES -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          
          <div class="col-md-4 col-sm-4">
            <a href="">
              <img class="img-fluid d-block mx-auto" src="img/logos/fourlions.jpg" alt="">
            </a>
          </div>
          <div class="col-md-4 col-sm-4">
            <a href="http://www.restaurantebecook.es/">
              <img class="img-fluid d-block mx-auto" src="img/logos/becook.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="http://brule.es">
              <img class="img-fluid d-block mx-auto" src="img/logos/brule.jpg" alt="">
            </a>
          </div>
          
        </div>
      </div>
    </section>

    <!-- Contacto -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Escríbenos!!!!</h2>
            <h3 class="section-subheading text-muted">Ayudanos a mejorar. Te haremos caso :)</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Tu nombre *" required="required" data-validation-required-message="Por favor, introduce tu nombre personal o de tu empresa.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Tu Email *" required="required" data-validation-required-message="Por favor, introduce tu email.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Tu teléfono *" required="required" data-validation-required-message="Por favor, introduce tu teléfono.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Tu mensaje *" required="required" data-validation-required-message="Por favor, introduce un mensaje."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; HReserver 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Política de Privacidad</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terminos de Uso</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 BRULÉ -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Detalles Brulé -->
                  <h2 class="text-uppercase">Brulé</h2>
                  <p class="item-intro text-muted">Restaurante de cocina moderna, canalla y divertida.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-brule.jpg" alt="">
                  <p>Este es un restaurante difícil de definir, en el que prima el cuidado al producto. La cocina a la brasa y el wok es la seña de identidad. No se parecen en nada a los demás, ya que buscan un estilo propio de cocina moderna a la vez que canalla.</p>
                
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 BECOOK-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Detalles Becook -->
                  <h2 class="text-uppercase">BECOOK</h2>
                  <p class="item-intro text-muted">Cocina en directo en un local moderno e informal como la oferta gastronómica.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-becook.jpg" alt="">
                  <p>En sus simpáticas instalaciones, de ambiente informal y con los fogones a la vista del cliente, le propondrán una moderna carta de gusto internacional que fusiona varios estilos de cocina.</p>
                
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3-FOUR LIONS -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Detalles Four Lions -->
                  <h2 class="text-uppercase">Four Lions Brewery</h2>
                  <p class="item-intro text-muted">La cerveza artesana y sus matíces</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-fourlions.jpg" alt="">
                  <p>Es una fábrica de elaboración de cerveza artesana ubicada en pleno centro histórico de León. <br>También contamos con una amplia carta de comida, desde comida rápida a opciones más elaboradas.</p>
               
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contacto form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

    <!-- Script Rellena Elige.. -->
    <script src="js/reservarAjax.js"></script>

  </body>

</html>
