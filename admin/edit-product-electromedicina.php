<?php
require './inc/session.inc';
assertUser();

require './inc/conexion-functions.php';
require './inc/sql-functions.php';


$product_id = $_GET['product_id'];
$product = getProductByIdElectromedicina($product_id);

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
       <link rel="stylesheet" type="text/css" href="./resources/editor/jqte/jquery-te-1.4.0.css" media="all" />
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
        <h1>Editar producto.</h1><hr>
       <form name="update-form-new-product" action="./actions/update-img-product-electromedicina-action.php" method="POST" enctype="multipart/form-data">
           <div align="right">    
                <button class="btn btn-large" type="submit" id="btn-update-new-product" >Guardar</button>
                <a href="./product_electromedicina.php" class="btn btn-large">Cancelar</a>
            </div>
           
           <!-- Example row of columns -->
                <div class="row">
                  <div class="span4">
                  <input type="hidden" value="<?=$product['id']?>" name="product-id" id="product-id">    
                    <h3>Titulo</h3>
                    <input type="text" value="<?=$product['title']?>"name="product-title" style="width:280px" id="product-title" required placeholder="Titulo para el producto">
                    <h3>Categoria</h3>
                     <select name="product-category" placeholder="Seleccione una categoria"  id="product-category-id">
                         <?php 
                         
                            $a_category = getCategoryElectromedicina();
                            if(empty($a_category)){
                                   echo "<div class='alert alert-danger'>No se encontraron registros </div>";
                            }else{ 
                           
                                foreach ($a_category as $c) { ?>    
                         
                                <option value="<?= $c['id']?>" <?= $c['id'] == $product['category_id'] ? " selected" : "" ?>><?=$c['name']?></option>                         
                                <?php 
                                }
                            }
                            ?>
                     </select>
                  </div>
                  <div class="span6">
                    <h3>Descripcion</h3>
                    <textarea name="product-description" class="jqte-test"  id="product-description" required placeholder="Descripcion de producto"><?= $product['description']?></textarea>

                  </div>
                </div>
           <hr>
                <div class="row">
                  <div class="span12">
                    <h3>Imagen</h3>
                    <!-- Ruta de imagen por defecto-->
                    <input type="hidden" value="<?=$product['image']?>" name="product-img-default" id="product-img-default">   
                    <div class="fileupload fileupload-new" data-provides="fileupload" id="box-img">
                        <div id="banner-thumbnail"class="fileupload-preview thumbnail"  style="width: 326px;"><img src="../img/products/<?= $product['image']?>" /></div>
                      <div>
                        <span class="btn btn-file">
                            <span class="fileupload-new"  >Seleccione un banner</span>
                            <span class="fileupload-exists">Cambiar</span>
                          <input type="file" id="product_img" accept='image/*' name="product_img"/>
                        </span>
                        <a href="#" id="btn-product-preview-remove" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                        <span class="label label-info"> Formatos: .jpg .png .gif .jpeg</span>
                      </div>
                    </div>
                  </div>
                </div>
           <hr>
              <div class="row">
                 <div class="span12">
                     <h3>Estado</h3>
                     <select name="product-state" id="product-state">
                         <?php $selected_1 = $selected_2 = "" ?>
                          <?= $product['active'] == 1 ? $selected_1 = "selected" : $selected_2="selected" ?>
                         <option value="1" <?= $selected_1 ?>>Activo</option>
                         <option value="0" <?= $selected_2 ?>>Inactivo</option>
                     </select>
                     <p>Puede activarlo mas tarde</p>
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
                    $('#product-description').jqte({color: false});
            });
        </script>
        <script src="./resources/ajax/ajaxFunctions.js"></script>
         <script src="./resources/bootstrap/assets/js/bootstrap-fileupload.js"></script>
         <script src="./resources/editor/jqte/jquery-te-1.4.0.min.js"></script>
  </body>
</html>
