<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Trajeados</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Mi icono en pestaña -->
  <link rel="icon" type="image/png" href="/ProyectoFinal/img/own/trajeados_icon.png" />
  <!-- Nombre Autor -->
  <meta content="Docampo, Juan Manuel" name="author" />
  <!-- Descripción de la página -->
  <meta content="Pagina que provee servicios de consultoria legal" name="description" />
  <!-- Etiquetas/Keywords -->
  <meta content="trajeados, abogados, legal" name="keywords" />
</head>



<body class="animated fadeInUp">
<!-- Start your project here-->

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-md navbar-dark nav-color lighten-1">
  <a class="navbar-brand" href="index.html">
    <img src="img/own/trajeados_icon.png" height="40" alt="mdb logo">
    <img src="img/own/trajeados_icon_label.png" height="40" alt="mdb logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Inicio</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="clientes.html">Clientes</a>
        
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="abogados.html">Abogados</a>
        <span class="sr-only">(current)</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactenos.html">Contactenos</a>
      </li>
      <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" height="30" class="rounded-circle z-depth-0"
            alt="avatar image">
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">
          <a class="dropdown-item" href="perfil.html">Perfil</a>
         <!-- <a class="dropdown-item" href="#">Cambiar Contraseña</a>  -->
          <a class="dropdown-item" href="index_login.html">Cerrar Sesion</a>
        </div>
      </li>      
    </ul>
  </div>
</nav>
<!--/.Navbar -->


<!--Contenido -->

<section class="container-fluid fondo-color "> <!-- imagen-fondo imagen-contenida -->
	<article class="row">
	   <div class="col-12 col-md-12"> <br/> <h2 class="centrar">Listado de Abogados</h2> </div>
	   
            <ul class="list-group list-group-flush col-12">

<?php
$fp = fopen('abogados.txt','r');
if (!$fp) {echo 'ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.'; exit;}
 
$loop = 0; // contador de líneas
while (!feof($fp)) { // loop hasta que se llegue al final del archivo
$loop++;
$line = fgets($fp); // guardamos toda la línea en $line como un string
// dividimos $line en sus celdas, separadas por el caracter |
// e incorporamos la línea a la matriz $field
$field[$loop] = explode ('|', $line);
// generamos la salida HTML
echo '
             
             <li class="list-group-item fondo-color">
              <br/>
                <div class="card bg-light mb-3" style=";">
                   <div class="container-fluid">
                    <div class="row">
                            <div class="col-12 col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                <div class="centrar">
                                      <br/>
                                     '.$field[$loop][0].'
                                      <br/>
                                      <br/>
                                      <img src=" '.$field[$loop][1].' "  class="rounded-circle z-depth-0 size-4" alt="avatar image">
                                </div>
                            </div>
                            <div class="col-12  col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                              <div class="card-body">
                                <h5 class="card-title">'.$field[$loop][2].'</h5>
                                <p class="card-text d-none d-sm-block">
                                '.$field[$loop][3].'
                                </p>
                               
                               <!-- Collapse buttons -->
                                <div class="d-block d-sm-none">
                                  <a style="color:black;" data-toggle="collapse" href="#descripcion'.$loop.'" aria-expanded="false" aria-controls="collapseExample">
                                    Descripción +
                                  </a>
                                </div>
                                <!-- / Collapse buttons -->
                                
                                <!-- Collapsible element -->
                                <div class="collapse" id="descripcion'.$loop.'">
                                  <div class="mt-3">
                                  '.$field[$loop][3].'
                                  </div>
                                </div>
                                <!-- / Collapsible element -->
                              </div>
                              
                          </div>
                          <div class= "col-12  col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                <!-- Grid column -->
                                        <!-- Links -->
                                        <br/>
                                        <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                                        <br/>
                                        <p class="d-none d-sm-block">
                                          <i class="fas fa-home mr-3"></i> '.$field[$loop][4].'</p>
                                        <p>
                                          <i class="fas fa-envelope mr-3"></i> '.$field[$loop][5].'</p>
                                        <p>
                                          <i class="fas fa-phone mr-3"></i> '.$field[$loop][6].'</p>
                                        <p  class="d-none d-sm-block">
                                          <i class="fas fa-print mr-3"></i> '.$field[$loop][7].'</p>
                                <!-- Grid column -->
                          </div>
                    </div>
                </div>
             </div>
             </li>             
';
$fp++; // necesitamos llevar el puntero del archivo a la siguiente línea
}
 
fclose($fp);
?>          
             
          </ul>

    </article>
</section>
<!--/.Contenido -->

<!-- Footer -->
<footer class="page-footer font-small nav-color darken-3 ">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="/ProyectoFinal/index.html"> trajeados.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>


