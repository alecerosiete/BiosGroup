<?php
require './inc/session.inc';
assertUser();
$user = getUser();
//print_r($user);
require './inc/conexion-functions.php';
require './inc/sql-functions.php';

$db = conect();
$tipo_usuario = $user['data']['tipo_de_usuario'];

$userInfo = getUserInfo();


$role = getRole(ROLE_PENSIONADO);

//print_r($role);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Panel de administracion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php require './inc/header.php'; ?>
    <style type="text/css">
          body {
            padding-top: 60px;
            padding-bottom: 40px;
          }

      </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
        
</head>
  <body>
    <?php include './inc/menu.php';?>

    <div class="container">
         <div class="msg-wrapper">
              <div id="msg" style="position:fixed ;text-align: center;z-index: 1000 ;right: 10%;margin-top:3%">
                  <?php include './tmpl/success_panel.inc' ?>
              </div>
              
        </div>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Panel de administracion de Contenidos.</h1><br>
        <p> Mediante este panel podra actualizar toda la inforamcion relacionada al portal www.biosgroup.com.py, podra crear categorias, productos y agregar informacion, fotografias y novedades como contenido del sitio.</p>
        
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Categorias</h2>
          <p>Administre las categorias de productos, puede crear una nueva categoria para luego agrupar productos  mostrarlos en la seccion de Productos del sitio. </p>
          <p><a class="btn btn-primary" href="./category.php">Telecomunicaciones &raquo;</a>
          <a class="btn btn-primary" href="./category_electromedicina.php">Electromedicina &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Productos</h2>
          <p>Administre sus productos, agregue, edite o elimine, puede agregar un numero infinito de productos asignando una categoria. </p>
           <p><a class="btn btn-primary" href="./product.php">Telecomunicaciones &raquo;</a>
          <a class="btn btn-primary" href="./product_electromedicina.php">Electromedicina &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Banners</h2>
          <p>Administre las imagenes que se presentaran como banner en el sitio, aqui podra crear, borrar, o consultar un banner que sera visualizado en la pagina principal.</p>
          <p><a class="btn btn-primary" href="./banner-administrator.php">Ingresar &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div> <!-- /container -->
    
    

    
    
    <?php require './inc/footer.php'; ?>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script type="text/javascript">
            // Executes the function when DOM will be loaded fully
            $(document).ready(function () {	
                    // hover property will help us set the events for mouse enter and mouse leave
                    $('.navigation li').hover(
                            // When mouse enters the .navigation element
                            function () {
                                    //Fade in the navigation submenu
                                    $('ul', this).fadeIn(); 	// fadeIn will show the sub cat menu
                            }, 
                            // When mouse leaves the .navigation element
                            function () {
                                    //Fade out the navigation submenu
                                    $('ul', this).fadeOut();	 // fadeOut will hide the sub cat menu		
                            }
                    );
            });
        </script>
        <script src="./resources/ajax/ajaxFunctions.js"></script>
  </body>
</html>



