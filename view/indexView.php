<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
          <meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
        <title>SIREVI Registro usuario_Funcional</title>
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

          $(document).ready(function(){
             $('.collapsible').collapsible({
               accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
             });
           });
          </script>
          <header>
                <div class="container"><a href="#" data-activates="nav-mobile"
                  class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only">
                  </a></div>

                <ul style="transform: translateX(0%);" id="nav-mobile" class="side-nav fixed">

<!--=====AQUI ES DONDE SE PONE LA FOTO DE USUARIO=======-->
                  <li><div class="userView">
                    <img class="background" src="assets/img/CasonaSantaRosa.jpg">
                    <a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
                    <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
                    <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div>
                  </li>
<!--========================FIN DE LINEA FOTO DE USUARIO=======================================-->


<!--===============================INICIO PARA EL BUSCADOR========-->
                    <li class="search">
                      <nav>
                        <div class="nav-wrapper">
                            <form class="z-depth-2" >
                              <div class="input-field">
                                <input placeholder="BUSCAR" style="color:white" id="search" type="search" required>
                                <label  for="search"><i href="#!" class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                              </div>
                            </form>
                          </div>
                      </nav>
                    </li>
<!--=====================================FIN DE LINEA PARA BUSCADOR==============================================================-->

<!--=========================================INICIO DE LINEAS PARA LAS OPCIONES DEL MENU=======================================-->
                    <li class="bold"><a href="http://www.acguanacaste.ac.cr/" class="waves-effect waves-teal">
                      <img class="circle" src="assets/img/logoACG.png"> Area Conservacion Guanacaste</a> </a></li>

                    <ul class="collapsible" data-collapsible="accordion">
                    <li>
                    <li class="bold"><a href="http://www.acguanacaste.ac.cr/turismo/sector-santa-rosa" class="waves-effect waves-teal">
                      <img class="circle" src="assets/img/SantaRosaLogo.jpg"> Informacion del Sector</a></a></li>

                    <li class="no-padding">
                      <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">
                            <img class="circle" src="assets/img/logoSitio.png"> Sitios Turisticos</a></a>

                          <div class="collapsible-body" style="display: block;">
                            <ul>
                              <li><a href="http://www.acguanacaste.ac.cr/turismo/sector-santa-rosa">Sector Santa Rosa</a></li>
                              <li><a href="">Sector Junquillal</a></li>
                              <li><a href="">Sector Santa Maria</a></li>
                              <li><a href="">Sector Horizontes</a></li>
                              <li><a href="">Sector Pailas</a></li>
                              <li><a href="">Sector Murcielago</a></li>
                              <li><a href="">Sector Marino</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="bold"><a href="http://www.acguanacaste.ac.cr/biodesarrollo/programa-de-ecoturismo"
                            class="collapsible-header  waves-effect waves-teal"><img class="circle" src="assets/img/tortuga.jpg"> Programa Ecoturismo</a></a>

                        <li class="bold active"><a class="collapsible-header active waves-effect waves-teal">Sesion</a>
                          <div class="collapsible-body" style="display: block;">
                            <ul>
                              <li><a href=""> Pagina inicio</a></li>
                              <li><a href="">Iniciar sesion con otra cuenta</a></li>
                              <li><a href="">Cerrar sesion</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="bold"><a href="REFERENCIA A LA PAGINA DE LISTADO USUARIOS" class="waves-effect waves-teal">Listar Usuarios</a></li>
                    </ul>

              </header>


<body class="body" >
<!--INICIO DEL side nav-->
<!--==============================================MENU HORIZONTAL FRANJA ROJA=================================================================-->
<nav>
   <div class="nav-wrapper">

     <a href="#!" class="brand-logo"><img class="circle" src="assets/img/sirevi.jpeg">&nbsp; SIREVI</a>
     <ul class="right hide-on-med-and-down">
       <li><a href=""><i class="material-icons left">search</i>Buscar</a></li>
       <li><a href=""><i class="material-icons right">view_module</i>Inicio</a></li>
     </ul>
       <a href="#" data-activates="slide-out" class="button-collapse"><i  style="color:whiite" class="medium material-icons">toc</i></a>
   </div>

 </nav>
<!--======================================================================================================================-->


<!--==========================================================OPCIONES PARA EL MENU LATERAL DEL RESPONSIVE-->
<!--================================== MENU LATERAL DESPLEGABLE <> INFORMACION DENTRO DEL SIDENAV-->
<div  class="z-depth-2">
     <ul id="slide-out" class="side-nav" >
       <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0px);">
         <li><div class="userView">
           <img class="background" src="assets/img/CasonaSantaRosa.jpg">
           <a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
           <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
           <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div>
         </li>

<!--============================================>> INICIO DE LA BARRA DE BUSCADOR side nav <<===================================================================-->
         <li class="search">
           <nav>
             <div class="nav-wrapper">
                 <form class="z-depth-2" >
                   <div class="input-field">
                     <input id="search" type="search" required>
                     <label for="search"><i href="#!" class="material-icons">search</i></label>
                     <i class="material-icons">close</i>
                   </div>
                 </form>
               </div>
           </nav>
         </li>
       <li class="bold"><a href="http://www.acguanacaste.ac.cr/" class="waves-effect waves-teal">
         <img class="circle" src="assets/img/logoACG.png"> Area Conservacion Guanacaste</a> </a></li>

       <ul class="collapsible" data-collapsible="accordion">
       <li>
       <li class="bold"><a href="http://www.acguanacaste.ac.cr/turismo/sector-santa-rosa" class="waves-effect waves-teal">
         <img class="circle" src="assets/img/SantaRosaLogo.jpg"> Informacion del Sector</a></a></li>

       <li class="no-padding">
         <ul class="collapsible collapsible-accordion">
           <li class="bold"><a class="collapsible-header  waves-effect waves-teal">
               <img class="circle" src="assets/img/logoSitio.png"> Sitios Turisticos</a></a>

             <div class="collapsible-body" style="display: block;">
               <ul>
                 <li><a href="http://www.acguanacaste.ac.cr/turismo/sector-santa-rosa">Sector Santa Rosa</a></li>
                 <li><a href="">Sector Junquillal</a></li>
                 <li><a href="">Sector Santa Maria</a></li>
                 <li><a href="">Sector Horizontes</a></li>
                 <li><a href="">Sector Pailas</a></li>
                 <li><a href="">Sector Murcielago</a></li>
                 <li><a href="">Sector Marino</a></li>
               </ul>
             </div>
           </li>
           <li class="bold"><a href="http://www.acguanacaste.ac.cr/biodesarrollo/programa-de-ecoturismo"
               class="collapsible-header  waves-effect waves-teal"><img class="circle" src="assets/img/tortuga.jpg"> Programa Ecoturismo</a></a>

           <li class="bold active"><a class="collapsible-header active waves-effect waves-teal">Sesion</a>
             <div class="collapsible-body" style="display: block;">
               <ul>
                 <li><a href=""> Pagina inicio</a></li>
                 <li><a href="">Iniciar sesion con otra cuenta</a></li>
                 <li><a href="">Cerrar sesion</a></li>
               </ul>
             </div>
           </li>
         </ul>
       </li>
     <li class="bold"><a href="REFERENCIA A LA PAGINA DE LISTADO USUARIOS" class="waves-effect waves-teal">Listar Usuarios</a></li>
     </ul>

   </div>
<!--     <a href="#" data-activates="slide-out" class="button-collapse"><i  style="color:red" class="medium material-icons">toc</i></a> -->
<!--=====================================FIN DE MENU LATERAL DESPLEGABLE RESPONSIVE ==================================================-->

<!--======================================INICIO DEL EL CUERPO DEL REGISTRO =========================================================-->
 <div class="container contact">
  <br>
  <h5>Registro Usuarios </h5>
  <h6>Completar la informacion con los datos correspondientes</h6>
  <hr>

        <div class="row">
          <div class="col s12 m6 l6">
            <div class="row">

              <form id="formulario" action="<?php echo $helper->url("usuarios","crear"); ?>" method="post" class="col s12" >
<!--INICIO DE LA COLUMNA PARA USUARIO-->
              <div class="row">
              <div class="input-field col s6">
                <input id="usuario" type="text" class="form-control"  class="validate">
              <label for="usuario">  <i class="small material-icons">insert_chart</i>&nbsp; Usuario@ej.com </label>
              </div>
<!--INICIO DE  COLUMNA CONTRASENA-->
              <div class="input-field col s6">
                <input id="password" type="text" class="validate">
                <label for="password">  <i class="small material-icons">perm_identity</i>&nbsp; Contraseña</label>
              </div>
              </div>

<!--INICIO DE LA FILA 2-->
<!--INICION DE LA COLUMNA DEL NOMBRE-->
                <div class="row">
                  <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate" name="nombre" class="form-control"/>
                    <label for="first_name"><i class="small material-icons">face</i>&nbsp;Nombre </label>
                  </div>

<!--INICIO DE OTRA COLUMNA-->
              <div class="input-field col s6">
                <input id="last_name" type="text"class="form-control" class="validate">
                <label for="last_name">&nbsp; Apellido </label>
              </div>
              </div>
<!--INICIO DE LA TERCERA FILA-->
<!--INICIO DE LA COLUMNA DE CEDULA-->
            <div class="row">
              <div class="input-field col s6">
                <input id="cedula" type="text" class="form-control" class="validate">
                <label for="cedula"><i class="small material-icons"> picture_in_picture </i>&nbsp; Cedula </label>
              </div>


<!--INICIO DE COLUMNA DEL PUESTO EN LA EMPRESA-->
              <div class="row">
                <div class="input-field col s6">
                  <input id="puesto" type="text"  class="form-control" class="validate">
                  <label for="puesto"><i class="small material-icons">description</i>&nbsp;Puesto en institucion </label>
                </div>
              </div>
<!--INICIO DE LINEAS PARA EL CORREO-->
              <div class="row">
                <div  class="input-field col s12">
                  <input id="email" type="email" class="form-control" class="validate">
                  <label for="email"><i class="small material-icons"> email </i>&nbsp; E-mail@ejemplo.com </label>
                </div>
              </div>
              <!--  <textarea class="materialize-textarea" placeholder="Your Message" required></textarea>
<!--BOTON QUE ME ENVIA EL FORMULARIO-->
                <button class="btn waves-effect waves-light" value="enviar" type="submit" name="action">Enviar
                  <i class="mdi-content-send right"></i>
                </button>
                <button class="btn waves-effect waves-light" value="reset" type="reset" name="action">Limpiar
                  <i class="mdi-content-send right"></i>
                </button>

              </form>

            </div>
          </div>

        </div>
      </div>
<!--INICIO DE LOS USUARIOS REGISTRADOS-->
      <div class="col-lg-12">
          <h5>  Usuarios Registrados </h5>
          <hr/>
      </div>
      <section class="col-lg-12 usuario" style="height:400px;overflow-y:scroll;">

           <br>
             <?php foreach($allusers as $user) { //RECORREMOS EL ARRAY DE OBJETOS Y OBTENEMOS EL VALOR DE LAS PROPIEADES ?>
              <?php echo $user->id; ?> ----
              <?php echo $user->usuario; ?> ---
              <?php echo $user->nombre; ?>
              <?php echo $user->apellido; ?> ---
              <?php echo $user->cedula; ?> ---
              <?php echo $user->email; ?>
              <div class="right">
                <!--LLAMADO DE LA FUNCION QUE ESTA DECLARADA EN EL UsuariosController.php-->
                  <a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
              </div>
              <hr/>
          <?php } ?>
      </section>
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
