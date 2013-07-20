<?php
require './inc/session.inc';
assertUser();
require './inc/conexion-functions.php';
require './inc/sql-functions.php';

$db = conect();



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
       <link rel="stylesheet" type="text/css" href="./resources/bootstrap/assets/css/bootstrap-fileupload.css" media="all" />
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
        <h1>Agregar nueva categoria.</h1>
        
        <form name="save-form-new-categoria" action="./actions/new-img-category-action.php" method="POST" enctype="multipart/form-data">
        <div align="right">
            <button class="btn btn-large" type="submit" id="btn-save-new-category" >Guardar</button>
            <a href="./category.php" class="btn btn-large">Cancelar</a>
        </div>
        <hr>
               <!-- Example row of columns -->
                <div class="row">
                  <div class="span4">
                    <h3>Nombre</h3>
                    <input type="text" name="category-name" style="width:280px" id="category-name" required placeholder="Nombre de categoria">
                    <h3>Titulo</h3>
                    <input type="text" name="category-title" style="width:280px" id="category-title" required placeholder="Titulo de categoria">

                    <h3>Descripcion</h3>
                    <textarea name="category-description" style="width:280px" rows="5"id="category-description" required placeholder="Descripcion de categoria"></textarea>

                  </div>
                  <div class="span4">
                    <h3>Imagen</h3>
                    <div class="fileupload fileupload-new" data-provides="fileupload" id="box-img">
                      <div id="banner-thumbnail"class="fileupload-preview thumbnail" style="width: 250px; height: 200px;"><img src="../img/default.png" /></div>
                      <div>
                        <span class="btn btn-file">
                            <span class="fileupload-new"  >Seleccione una imagen</span>
                            <span class="fileupload-exists">Cambiar</span>
                          <input type="file" id="image_category" accept='image/*' name="image_category"/>
                        </span>
                        <a href="#" id="btn-banner-preview-remove" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                        <span class="label label-info"> Formatos: .jpg .png .gif .jpeg</span>
                      </div>
                    </div>
                  </div>
                  
                 <div class="span3">
                     <h3>Estado</h3>
                     <select name="category-state" id="category-state">
                         <option value="1">Activo</option>
                         <option value="0">Inactivo</option>
                     </select>
                     <p>Puede activarlo mas tarde</p>
                     <hr>
                     <h3>Categoria</h3>
                     <select name="category-table" id="category-table">
                         <option value="category">Telecomunicacion</option>
                         <option value="category_electromedicina">Electromedicina</option>
                     </select>
                     
                     <hr>
                 </div>
                </div>
            </form>
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
         <script src="./resources/bootstrap/assets/js/bootstrap-fileupload.js"></script>
  </body>
</html>



