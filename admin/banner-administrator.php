<?php
require './inc/session.inc';
assertUser();
$user = getUser();
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
          .carousel {
        margin-left: 0px;
        margin-right: 0px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 100%;
        padding: 10px;
        margin-top: 70px;
          color: #4a5e89;
      }
      .carousel-caption h1 {
        font-size: 20px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 14px;
      }
        .table-edit-data th, .table-edit-data td {
        padding: 8px;
        line-height: 20px;
        text-align: right;
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
        
         #msg-success{
              width: 200px;
              height: 60px;
              vertical-align: middle;
              display:table-cell;
              font-size: 16px;
              font-weight: bold;
              text-shadow: 2px 2px 2px #fff;

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
        <h1>Administracion de Banners.</h1>
            <div align="right">
                <br>
                <hr>
            </div>
            <div class="tabbable" style="font-size: 16px">
         
                <ul class="nav nav-pills">
                  <!--li><a href="#intro" data-toggle="tab">Introduccion</a></li-->  

                  <li class="active"><a href="#banners-electromedicina" data-toggle="tab">Banners Electromedicina</a></li>
                  <li><a href="#banners-telecomunicaciones" data-toggle="tab">Banners Telecomunicaciones</a></li>
                  <li><a href="#nuevo-banner" data-toggle="tab">Agregar Nuevo Banner</a></li>

                  <!--li><a href="#aportes" data-toggle="tab"></a></li-->

                </ul>

                <div class="tab-content">
                  
                    
                    
                  <div id="banners-electromedicina" class="tab-pane active" >
                    <div class="hero-unit-interno">
                        <H3>Banners Electromedicina</H3>
                            <hr style="border: 1px solid #E35300">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <?php 
                                        $table_electromedicina = "banner_electromedicina";
                                        $a_getAllBannersElectro = getBanner($table_electromedicina);
                                        //$a_getAllBannersTeleco = getBanner('banner_telecomunicaciones');
                                        if(empty($a_getAllBannersElectro )){
                                               echo "<div class='alert alert-danger'>No se encontraron registros </div>";
                                        }else{
                                        ?>
                                        <th width="5%">ID</th>
                                        <th width="60%">Nombre</th>
                                        <th width="10%"  style="text-align: center">Estado</th>  
                                        <th width="10%"  style="text-align: center">Editar</th>
                                        <th width="10%"  style="text-align: center">Borrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                           foreach ($a_getAllBannersElectro as $banner) {
                                               ?>
                                                   <tr id="<?=$banner['id']?>">
                                                       <td ><?=$banner['id']?></td>
                                                       <td><?=$banner['banner_title']?></td>
                                                       <?php
                                                       $label = $banner['active'] == 1 ? 'Desactivar' : 'Activar';
                                                       $html = "<td style='text-align: center'><input type='button' class='btn' value='".$label."' id='activate_banner_electromedicina".$banner['id']."' onclick='(btn_active_banner_electromedicina(".$banner['id']."))'/></td>";
                                                       $html .= "<td style='text-align: center'><a href='./edit-banner-electromedicina.php?banner_id=".$banner['id']."' class='btn'>Editar</a></td>";
                                                       echo $html;
                                                       ?>
                                                       
                                                       
                                                       
                                                       <td><input type='button' class='btn' value='Borrar' onclick="(btn_borrar_banner(<?=$banner['id']?>,'banner_electromedicina'))"/></td>
                                                   </tr>
                                               <?php
                                            }
                                            
                                        }
                                    ?>
                                </tbody>
                                
                            </table>   
                    </div>
                      <div class="hero-unit-interno">
                         <H3>Vista Previa</H3>
                            <div clas="span10" style="width:940px;height: 300px;margin-left: auto;margin-right: auto;">
                                <!-- Carousel
                            ================================================== -->
                            <div id="carrouselElectromedicina" class="carousel slide">
                              <div class="carousel-inner">

                                  <!-- Obtiene las imagenes -->
                                  <?php

                                     $a_banner = getBanner('banner_electromedicina');
                                     //print_r($a_banner);
                                     $active = 0;
                                     foreach ($a_banner as $banner) {
                                         if($banner['active']==1){
                                            if($active == 0){
                                               echo "<div class='item active'>";
                                               $active = -1;
                                            }else{
                                               echo "<div class='item'>";
                                            }
                                            ?>
                                            <img src="./resources/images/banner/<?=$banner['banner_name']?>" alt="<?=$banner['banner_title']?>">
                                            <div class='container'></div>

                                            <div class="carousel-caption">
                                                <h1><?= $banner['banner_title'] ?></h1>
                                                <p class="lead"> <?= $banner['banner_text'] ?></p>

                                            </div>



                                            <?php
                                            echo "</div>";
                                         }
                                     }       


                                  ?>                               

                              </div>
                                <?php
                                if (empty($a_banner)){
                                    echo "<div class='alert alert-danger'>No se encontro ningun banner </div>";
                                    
                                }else{                        
                                ?>
                                  <a class="left carousel-control" href="#carrouselElectromedicina" data-slide="prev">&lsaquo;</a>
                                  <a class="right carousel-control" href="#carrouselElectromedicina" data-slide="next">&rsaquo;</a>
                                 <?php
                                }
                                ?>
                                  
                            </div>
                            <!-- /.carousel -->
                            </div>
                     </div>
                  </div>
                    
                 <div id="banners-telecomunicaciones" class="tab-pane ">
                    <div class="hero-unit-interno">
                        <H3>Banners Telecomunicaciones</H3>
                            <hr style="border: 1px solid #E35300">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <?php 
                                        $table_telecomunicaciones = "banner_telecomunicaciones";
                                        $a_getAllBannersTeleco = getBanner($table_telecomunicaciones);
                                        if(empty($a_getAllBannersTeleco )){
                                               echo "<div class='alert alert-danger'>No se encontraron registros </div>";
                                        }else{
                                        ?>
                                        <th width="5%">ID</th>
                                        <th width="60%">Nombre</th>
                                         <th width="10%"  style="text-align: center">Estado</th>  
                                        <th width="10%"  style="text-align: center">Editar</th>
                                        <th width="10%"  style="text-align: center">Borrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                           foreach ($a_getAllBannersTeleco as $banner) {
                                               ?>
                                                   <tr id="<?=$banner['id']?>">
                                                       <td ><?=$banner['id']?></td>
                                                       <td><?=$banner['banner_title']?></td>
                                                       <?php
                                                       $label = $banner['active'] == 1 ? 'Desactivar' : 'Activar';
                                                       $html = "<td style='text-align: center'><input type='button' class='btn' value='".$label."' id='activate_banner_telecomunicaciones".$banner['id']."' onclick='(btn_active_banner_telecomunicaciones(".$banner['id']."))'/></td>";
                                                       $html .= "<td style='text-align: center'><a href='./edit-banner-telecomunicaciones.php?banner_id=".$banner['id']."' class='btn'>Editar</a></td>";
                                                       echo $html;
                                                       ?>
                                                       <td><input type='button' class='btn' value='Borrar' onclick="(btn_borrar_banner(<?=$banner['id']?>,'banner_telecomunicaciones'))"/></td>
                                                   </tr>
                                               <?php
                                                       
                                           }
                                            
                                      ?>
                                </tbody>
                                <?php
                                       }
                                    
                                    ?>           
                            </table>  
                            </div>
                     <div class="hero-unit-interno">
                         <H3>Vista Previa</H3>
                            <div clas="span10" style="width:940px;height: 300px;margin-left: auto;margin-right: auto;">
                                <!-- Carousel
                            ================================================== -->
                            <div id="carrouselTelecomunicaciones" class="carousel slide">
                              <div class="carousel-inner">

                                  <!-- Obtiene las imagenes -->
                                  <?php
                                     
                                     $a_banner = getBanner($table_telecomunicaciones);
                                     //print_r($a_banner);
                                     $active = 0;
                                     foreach ($a_banner as $banner) {
                                         if($banner['active'] == 1){
                                            if($active == 0){
                                               echo "<div class='item active'>";
                                               $active = -1;
                                            }else{
                                               echo "<div class='item'>";
                                            }

                                            echo "<div align='center'><img align='center'  src='./resources/images/banner/".$banner['banner_name']."' alt='".$banner['banner_title']."'></div>";
                                            echo "<div class='container'></div>";
                                            ?>
                                            <div class="carousel-caption">
                                                <h1><?= $banner['banner_title'] ?></h1>
                                                <p class="lead"> <?= $banner['banner_text'] ?></p>

                                            </div>



                                            <?php
                                            echo "</div>";
                                         }
                                     }       


                                  ?>                               

                              </div>
                                <?php
                                if (empty($a_banner)){
                                    echo "<div class='alert alert-danger'>No se encontro ningun banner </div>";
                                    
                                }else{                        
                                ?>
                                  <a class="left carousel-control" href="#carrouselTelecomunicaciones" data-slide="prev">&lsaquo;</a>
                                  <a class="right carousel-control" href="#carrouselTelecomunicaciones" data-slide="next">&rsaquo;</a>
                                 <?php
                                }
                                ?>
                                  
                            </div>
                            <!-- /.carousel -->
                            </div>
                     </div>
                  </div>  
                    
                  <div id="nuevo-banner" class="tab-pane">
                    <div class="hero-unit-interno">
                        <H3>Agregar contenido de banner</H3>
                        <hr style="border: 1px solid #E35300">
                        
                        <form action="./actions/save-banner-action.php" method="POST" id="form-upload-banner" enctype="multipart/form-data">
                            <div class="text-novedades-preview">
                                <label> <h3>Titulo</h3></label><input type="text" id="titulo-banner" name="titulo-banner" style="width:300px" placeholder="Ingrese un titulo">
                                <label> <h3>Descripcion</h3></label><textarea id="texto-banner" name="texto-banner" style="width:300px" rows="8"></textarea>
                                 <div>

                                    <input type="submit" class="btn" id="btn-guardar-banner" value="Guardar">
                                    <div style="clear: both"></div>
                                </div>
                            </div>

                            <div class="banner-preview">
                                <div class="fileupload fileupload-new" data-provides="fileupload" id="box-banner">
                                     <div id="banner-thumbnail" class="fileupload-preview thumbnail" style="width: 350px; height: 190px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
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
                            <div class="span3">
                                <h3>Grupo</h3>
                                    <select name="banner-category"  id="banner-category">

                                        <option value="banner_telecomunicaciones">Telecomunicaciones</option>
                                        <option value="banner_electromedicina">Electromedicina</option>

                                    </select> 
                                
                                <?php 
                                $productos = getProducts("product");
                               
                                ?>
                                 <h3>Link</h3>
                                 <p>Seleccione el producto al que sera vinculado el banner.</p>
                                    <select name="banner-link"  id="banner-link">
                                        <?php
                                    foreach ($productos as $producto) {
                                        echo "<option value='".$producto['id']."'>".$producto['title']."</option>";
                                    };
                                     $productos = getProducts("product_electromedicina");
                                     foreach ($productos as $producto) {
                                        echo "<option value='".$producto['id']."'>".$producto['title']."</option>";
                                    };
                                        ?>
                                    </select>

                            </div>
                            <div style="clear: both"></div>
                        <div style="text-align:center">
                            Suba una imagen con un tamaño aproximado de <span class="label label-info">940x300 pixeles</span> para su mejor visualizacion.
                            <div style="clear: both"></div>
                        </div>
                      </form>
                    </div>
                     
                  </div>
                  <!--div id="aportes" class="tab-pane">
                     <div class="hero-unit-interno">

                                        <H3 style="text-align:right;color:#E35300;margin-bottom:50px">Aportes</H3>
                                        <hr style="border: 1px solid #E35300">

                     </div>
                  </div-->
                </div><!-- /.tab-content -->
              </div><!-- /.tabbable -->
         
            <!-- /Fin edicion de banner -->
             
        
        
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
          $('#carrouselElectromedicina').carousel()
          $('#carrouselTelecomunicaciones').carousel()
        })
      }(window.jQuery)
    </script>
    
        <script src="./resources/ajax/ajaxFunctions.js"></script>
         <script src="./resources/bootstrap/assets/js/bootstrap-fileupload.js"></script>
  </body>
</html>
