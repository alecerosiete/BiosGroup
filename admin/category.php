<?php
require './inc/session.inc';
assertUser();
$user = getUser();
require './inc/conexion-functions.php';
require './inc/sql-functions.php';

$db = conect();
$tipo_usuario = $user['data']['tipo_de_usuario'];

$userInfo = getUserInfo();

$role = getRole(ROLE_PENSIONADO);

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
      <?php  include './inc/menu.php';?>
    

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
          
        <h1>Administracion de Categorias.</h1>
        <div align="right">
            <a href="./new-category.php" class="btn btn-large">Nuevo</a>
        </div>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <?php 
                    $a_category = getCategory();
                    if(empty($a_category)){
                           echo "<div class='alert alert-danger'>No se encontraron registros </div>";
                    }else{
                    ?>
                    <th width="20%">ID</th>
                    <th width="40%">Nombre</th>
                    <th width="40%">Creado</th>
                    <th width="40%">Activar</th>
                    <th width="20%">Editar</th>
                    <th width="20%">Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $html = "";
                       foreach ($a_category as $category) {

                            $html .= "<tr><td>".$category['id']."</td>";
                            $html .= "<td>".$category['name']."</td>";
                            $html .= "<td>".$category['registered']."</td>";
                            $html .= "<td><input type='button' class='btn' value='Activar' onclick='(btn_active_category(".$category['id']."))'/></td>";
                            $html .= "<td><input type='button' class='btn' value='Editar' onclick='(btn_edit_category(".$category['id']."))'/></td>";
                            $html .= "<td><input type='button' class='btn' value='Borrar' onclick='(btn_delete_category(".$category['id']."))'/></td></tr>";
                        }    
                    }
                    echo $html;
                    ?>
                
            </tbody>

        </table>  
      </div>

      <!-- Example row of columns -->
      <!--div class="row">
        <div class="span4">
          <h2>Categorias</h2>
          <p>Administre las categorias de productos, puede crear una nueva categoria para luego agrupar productos  mostrarlos en la seccion de Productos del sitio. </p>
          <p><a class="btn btn-primary" href="#">Ingresar &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Productos</h2>
          <p>Administre sus productos, agregue, edite o elimine, puede agregar un numero infinito de productos asignando una categoria. </p>
          <p><a class="btn btn-primary"  href="#">Ingresar &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Otro</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
        </div>
      </div-->

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



