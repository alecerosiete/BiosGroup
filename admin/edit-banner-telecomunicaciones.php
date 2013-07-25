<?php
require './inc/session.inc';
assertUser();
$user = getUser();
require './inc/conexion-functions.php';
require './inc/sql-functions.php';
$banner_id = $_GET['banner_id'];
$banner_category = "banner_telecomunicaciones";
$a_banner = getBannerById($banner_category,$banner_id);


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
          #msg-success{
              width: 200px;
              height: 60px;
              vertical-align: middle;
              display:table-cell;
              font-size: 16px;
              font-weight: bold;
              text-shadow: 2px 2px 2px #fff;

          }
          
        .banner-preview .fileupload{
            width: auto;
            margin-left: 50px;
            margin-right: 0px;
            margin-top: 23px;
            float:left;
            
        }
        .text-novedades-preview{
            width: autopx;
            margin-left: 50px;
            float:left;
        }
        .preview-novedades{
            width:600px;
            display: block;
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
        <div class="msg-wrapper">
              <div id="msg" style="position:fixed ;text-align: center;z-index: 1000 ;right: 10%;margin-top:3%">
                  <?php include './tmpl/success_panel.inc' ?>
                   <?php include './tmpl/error_panel.inc' ?>
              </div>
        </div>
        

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
          
        <h1>Edición de banner</h1><hr>
        <div class="hero-unit-interno">
                <h3>Banners para Telecomunicaciones.</h3>  
                        <hr style="border: 1px solid #E35300">
        <form action="./actions/update-banner-action.php" method="POST" id="form-upload-banner" enctype="multipart/form-data">
            <div class="text-novedades-preview">
                <label> <h3>Titulo</h3></label><input type="text" id="titulo-banner" name="titulo-banner" style="width:300px" value="<?=$a_banner['banner_title']?>">
                <label> <h3>Descripcion</h3></label><textarea id="texto-banner" name="texto-banner" style="width:300px" rows="8"><?=$a_banner['banner_text']?></textarea>
                 <div>
                    <input type="submit" class="btn" id="btn-update-banner" value="Guardar">
                    <div style="clear: both"></div>
                </div>
            </div>
            <input type="hidden" name="banner-id" value="<?=$banner_id?>">
            <input type="hidden" name="banner-category" value="<?=$banner_category?>">
            <div class="text-novedades-preview">
                <h3>Subir nueva imagen</h3>
                <div class="fileupload fileupload-new" data-provides="fileupload" id="box-banner">
                    <div id="banner-thumbnail" class="fileupload-preview thumbnail" style="width: 300px; height: 190px;"><img src="../img/default.png" /></div>
                     <div>
                       <span class="btn btn-file">
                           <span class="fileupload-new"  >Seleccione un banner</span>
                           <span class="fileupload-exists">Cambiar
                       </span>
                         <input type="file" id="banner" accept='image/*' name="banner"/>
                     </span>
                       <a href="#" id="btn-banner-preview-remove" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                       <span class="label label-info"> Formatos: .jpg .png .gif .jpeg</span>
                     </div>
                     <br>

                   </div>


            </div>
            <div class="text-novedades-preview">
                <h3>Vista previa</h3>
                 <div id="banner-thumbnail" class="fileupload-preview thumbnail" style="width: 940px;height: 300px"><img src="./resources/images/banner/<?= $a_banner['banner_name'];?>" /></div>
                
            </div>
            <div style="clear: both"></div>
        <div style="text-align:center">
            Suba una imagen con un tamaño aproximado de <span class="label label-info">940x300 pixeles</span> para su mejor visualizacion.
            <div style="clear: both"></div>
        </div>
      </form>
        
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
    
        <script src="./resources/ajax/ajaxFunctions.js"></script>
        <script src="./resources/bootstrap/assets/js/bootstrap-fileupload.js"></script>
  </body>
</html>



