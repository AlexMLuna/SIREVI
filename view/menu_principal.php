<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
        <title>SIREVI Menu Principal</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//estilos.php" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../assets/js/jquery.anexsoft-validator.js"></script>
        <script type="text/javascript" src="/assets/js//indexUsuarios.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
    /*   $(".dropdown-button").dropdown(hover:false);*/
    })

    </script>
    <header>
      <div class="slider">
         <ul class="slides">
           <li>
             <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
             <div class="caption center-align">
               <h3>This is our big Tagline!</h3>
               <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
             </div>
           </li>
           <li>
             <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
             <div class="caption left-align">
               <h3>Left Aligned Caption</h3>
               <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
             </div>
           </li>
           <li>
             <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
             <div class="caption right-align">
               <h3>Right Aligned Caption</h3>
               <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
             </div>
           </li>
           <li>
             <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
             <div class="caption center-align">
               <h3>This is our big Tagline!</h3>
               <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
             </div>
           </li>
         </ul>
       </div>
    </header>
    <body class="body" >

      <nav class="z-depth-3" id="navegador">
         <div class="nav-wrapper">
             <a href="#!" class="brand-logo center">&nbsp;**SIREVI** </a>
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
         <a href="#" data-activates="slide-out" class="button-collapse"><i  style="color:red" class="medium material-icons">toc</i></a>
    </div>
  </body>
</html>
