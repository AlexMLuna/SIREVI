<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
        <title>SIREVI Principal</title>
<!--        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
        <link href="//estilos.php" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../assets/js/jquery.anexsoft-validator.js"></script>
        <script type="text/javascript" src="/assets/js/indexUsuarios.js"></script>
    <!--    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min."></script>
      <link rel="stylesheet" type="text/css" href="assets/css/estilos.css" />
    <!--    <link rel="stylesheet" href="assets/css/style1.css" /> -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react-dom.min.js"/>
        <link rel="stylesheet" href="https://cdn.rawgit.com/Dogfalo/materialize/master/dist/js/materialize.min.js"/>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--PARA LOS ICONOS-->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <!--ME DA LA PROPIEDAD DE HACER MAS PEQUENO EL AREA DONDE ESCRIBO -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

    </head>
    <script>
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
      $('.slider').slider({full_width: true});
      $('.carousel').carousel();
      $('.collapsible').collapsible();


    /*   $(".dropdown-button").dropdown(hover:false);*/
    })


    </script>
    <header>
      <div class="slider">
         <ul class="slides">
           <li>
             <img src="https://www.google.com/search?q=Parque+nacional+santa+rosa&client=firefox-b-ab&biw=1366&bih=657&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiboufN74zQAhVO7GMKHdDoBw0Q_AUIBygC#imgrc=seDSM-kv20BQvM%3A"> <!-- random image -->
             <div class="caption center-align">
               <h3>Bienvenido Area de Conservacion Guanacaste</h3>
               <h5 class="light grey-text text-lighten-3">Sistema Registro de Visitacion</h5>
             </div>
           </li>
           <!--===============================================================================================================-->
           <li>
          <img class="background" src="assets/img/CasonaSantaRosa.jpg"> <!-- random image -->
             <div class="caption center-align">
               <h3>Sector Santa Rosa</h3>
               <h5 class="light grey-text text-lighten-3">TEXTO SOBRE EL SECTOR SANTA ROSA</h5>
             </div>
           </li>
           <!--===============================================================================================================-->

           <li>
             <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
             <div class="caption left-align">
               <h3>Sector Pailas</h3>
               <h5 class="light grey-text text-lighten-3">Pailas es uno de los sectores mas visitados.</h5>
             </div>
           </li>
           <!--===============================================================================================================-->

           <li>
             <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
             <div class="caption left-align">
               <h3>Sector Junquillal</h3>
               <h5 class="light grey-text text-lighten-3">Junquilla es una playa bonita...</h5>
             </div>
           </li>
           <!--======================================================================================================================-->
           <li>
             <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
             <div class="caption left-align">
               <h3>Sector Murcielago</h3>
               <h5 class="light grey-text text-lighten-3">Pailas es uno de los sectores mas visitados.</h5>
             </div>
           </li>
         <!--======================================================================================================================-->
           <li>
             <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
             <div class="caption right-align">
               <h3>Sector Santa Maria</h3>
               <h5 class="light grey-text text-lighten-3">En el sector snata maria hay barro volcanico</h5>
             </div>
           </li>
           <!--=======================================================================================================================-->
           <li>
             <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
             <div class="caption center-align">
               <h3>Sector Horizontes</h3>
               <h5 class="light grey-text text-lighten-3">Informacion sobre el sector horizontes</h5>
             </div>
           </li>
         </ul>
       </div>
    </header>
    <body class="body" >

      <nav class="z-depth-3" id="navegador">
         <div class="nav-wrapper">
             <a href="#!" class="brand-logo center">&nbsp; </a>
        <!--     <a href="#" data-activates="mobile-demo" class="button-collapse">Menu<i class="material-icons">menu</i></a>-->
             <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">Reiniciar</a></li>
              <li><a href="#!">Iniciar con otra cuenta</a></li>
              <li class="divider"></li>
              <li><a href="REFERENCIA A LOGIN"></i>Cerrar</a></li>
            </ul>
             <ul class="right hide-on-med-and-down">
              <!-- <li><a href=""><i class="material-icons left">search</i>Buscar</a></li>-->
               <li><a href="indexLogin.php">Inicio</a></li>
               <li><a href="pagina">Contacto</a></li>
              <li><a class="dropdown-button" href="#!"  data-activates="dropdown1">Sesion<i class="material-icons right">arrow_drop_down</i></a></li>
             </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i  style="color:White" class="medium material-icons">toc</i></a>
           </div>

         </nav>

    <!--OPCIONES PARA EL MENU LATERAL DEL RESPONSIVE-->
    <!--INFORMACION DENTRO DEL SIDENAV-->
    <div  class="z-depth-2">
         <ul id="slide-out" class="side-nav">
           <li><div class="userView">
             <img class="background" src="assets/img/CasonaSantaRosa.jpg">
             <a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
             <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
             <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div></li>

           <li><img class="circle" src="assets/img/logoACG.webp"></a></i>&nbsp;Sector Santa Rosa</a></li>
           <li><a href="http://www.acguanacaste.ac.cr/">Area Conservacion Guanacaste</a></li>
           <li><div class="divider"></div></li>
           <li><a href="http://www.acguanacaste.ac.cr/biodesarrollo/programa-de-ecoturismo">Informacion Ecoturismo</a></li>

           <li><div class="divider"></div></li>
           <li><a class="subheader">Visitenos</a></li>
           <li><a class="waves-effect" href="Referencia a pagina principal sirevi">Pagina Inicio</a></li>
           <li><a class="waves-effect" href="PAGINA DE CONTACTOS E INFO">Contactenos</a></li>
           <li><a class="waves-effect" href="http://www.acguanacaste.ac.cr/turismo">Sitios Turisticos</a></li>

           <li><div class="divider"></div></li>
           <li><a class="subheader">Sesion</a></li>
         </ul>

    </div>

    <!--============================================================================================-->
      <div class="container contact">
       <br>
       <h5>Area de Conservacion Guanacaste </h5>
       <h6>TEXTO INFORMATIVO SOBRE CUAKQUIER COSA</h6>
       <hr>

             <div class><!--INICIO DE LA PREVISTA DE DIV'S-->
               <div class="col s12 m6 l6"><!--DIV QUE ME DECLARA EL TAMANO DE ANCHO DEL CUERPO DE LA PREVISTA DE LAS DIVICIONES-->
                 <div class>

     <!--INICIO DE PRIMERA COLUMNA-->
                   <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                   <div class="input-field col s4"><!--INICIO DE LA PRIMERA COLUMNA-->
                     <div class="row">
                       <div >
                         <div class="card blue-grey darken-1">
                           <div class="card-content white-text">
                             <span class="card-title">AQUI VA UN TITULO</span>
                             <p>Esta es una carta muy simple.Soy muy buena conteniendo pequena informacion.
                            Soy conveniente porque reuiqero una pequeno margen para ser usada eficientemente.</p>
                           </div>
                           <div class="card-action">
                             <a href="#">Aqui va un link</a>
                             <a href="#">Aqui va otro link</a>
                           </div>
                         </div>
                       </div>
                     </div>
                 </div><!--FIN DEL DIV QUE ME DECLARA EL TAMANO DE LA CARTA-->

     <!--INICIO DE SEGUNDA COLUMNA-->
                   <div class="input-field col s4">
                    <div class="row">
                    <div class=>
                      <div class="large card" >
                        <div class="card-image">
                          <img src="assets/img/yo.jpg">
                          <span class="card-title">Titulo</span>
                        </div>
                        <div class="card-content">
                          <p>Esta es una carta muy simple.Soy muy buena conteniendo pequena informacion.
                         Soy conveniente porque reuiqero una pequeno margen para ser usada eficientemente.</p>
                        </div>
                        <div class="card-action">
                          <a href="#">LINK</a>
                        </div>
                      </div>
                    </div>
                  </div>
                   </div>

    <!--INICIO DE LA TERCERA COLUMNA-->
                <div class="input-field col s4">
                  <div class="row">
                    <div ><!--INICIO DEL DIV PRINCIPAL-->
                      <div class="card-panel teal"><!--DIV DE LA TARJETA 1-->
                        <span class="white-text">Esta es una carta muy simple.Soy muy buena conteniendo pequena informacion.
                       Soy conveniente porque reuiqero una pequeno margen para ser usada eficientemente.
                       Soy similar a lo que se llama un panel en otros marcos.
                        </span>
                      </div>

                      <div class="card-panel teal"><!--DIV DE LA TARJETA 2-->
                        <span class="white-text">Esta es una carta muy simple.Soy muy buena conteniendo pequena informacion.
                       Soy conveniente porque reuiqero una pequeno margen para ser usada eficientemente.
                       Soy similar a lo que se llama un panel en otros marcos.
                        </span>
                      </div>
                    </div>
                  </div><!--FIN DEL DIV CONTENEDOR ROW-->
                </div><!--FIN DEL DIV QUE ME DECLARA EL TAMANO-->
             </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

     <!--INICIO DE LA FILA 2-->
     <!--INICION DE PRIMERA COLUMNA-->
      <hr>
                     <div class="row"><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                       <div class="input-field col s4">
                         <div class="carousel">
                          <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
                          <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
                          <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
                          <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
                          <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
                        </div><!--FIN DEL DIV CARRUSEL-->
                      </div><!--FIN DEL DIV QUE ME DECLARA EL TAMANO-->

     <!--INICIO DE SEGUNDA COLUMNA-->
                   <div class="input-field col s4">
                     <ul class="popout collapsible" class="popout" data-collapsible="accordion">
                      <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                      </li>
                    </ul>
                   </div>

    <!--INICIO DE TERCER COLUMNA-->
                  <div class="input-field col s4">
                    <div class="row">
                      <div class="row">
                              <div >
                                <div class="card blue-grey darken-1">
                                  <div class="card-content white-text">
                                    <span class="card-title">Card Title</span>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                                  </div>
                                  <div class="card-action">
                                    <a href="#">This is a link</a>
                                    <a href="#">This is a link</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                  </div>
           </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->


     <!--INICIO DE LA TERCERA FILA-->
     <!--INICIO DE LA COLUMNA PUESTO EN INSTITUCION-->
               <div class="row"><!--INICIO DE TERCERA FILA-->
                   <div class="row">
                     <div class="input-field col s12">
                       <input id="puesto" type="text"  class="form-control" class="validate">
                       <label for="puesto"><i class="small material-icons"></i>&nbsp;AQUI VA ALGO </label>
                     </div>
                   </div>
                 </div><!--FIN DE LA TERCERA FILA-->

     <!--INICIO DE LINEAS PARA EL CORREO-->
                   <div class="row">
                     <div  class="input-field col s12">
                       <input id="email" type="email" class="form-control" class="validate">
                       <label for="email"><i class="small material-icons"> email </i>&nbsp; aqui tambien va algo </label>
                     </div>
                   </div>

                <textarea class="materialize-textarea" placeholder="Your Message" required></textarea>

               </div>
             </div><!--FIN DE DIV QUE ME DECLARA EL TAMANO-->
           </div><!--FIN DE LA PREVISTA DE LOS DIV'S-->

     <!--INICIO DE LOS-->
           <div class="col-lg-12">

               <hr/>
           </div>

     </div><!--FIN DE container-contact-->

    <footer class="page-footer">
         <div class="container">
           <div class="row">
             <div class="col l6 s12">
               <h5 class="white-text">INFORMACION PARA EL FOOTER</h5>
               <p class="grey-text text-lighten-4">Puedo usar columnas y otras cosas aqui para hacer mejor el footer</p>
             </div>
             <div class="col l4 offset-l2 s12">
               <h5 class="white-text">Links</h5>
               <ul>
                 <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                 <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                 <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                 <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
               </ul>
             </div>
           </div>
         </div>
         <div style="align-items:left"class="footer-copyright">
           <div style="align=left"class="container">
           © 2016 Copyright Sistema Registro Visitacion Area Conservacion Guanacaste
           <a class="grey-text text-lighten-4 right" href="#!">Mas Links</a>
           </div>
         </div>
       </footer>

  </body>
</html>
