<?php
require './inc/session.inc';
assertUser();

require './inc/conexion-functions.php';
require './inc/sql-functions.php';



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
        <h1>Administracion de Productos para Telecomunicaciones.</h1>
        <div align="right">
            <a href="./new-product.php?category=telecomunicaciones" class="btn btn-large">Nuevo</a><hr>
        </div>
         <table class="table table-hover">
            <thead>
                <tr >
                    <?php 
                    $a_products = getProducts('product');                   
                    if(empty($a_products)){
                           echo "<div class='alert alert-danger'>No se encontraron registros </div>";
                    }else{
                    ?>
                    <th width="5%">ID</th>
                    <th width="30%">Nombre</th>
                    <th width="30%">Categoria</th>
                    <th width="20%" style="text-align: center">Creado</th>
                    <th width="10%" style="text-align: center">Destacado</th>
                    <th width="10%" style="text-align: center">Activo</th>
                    <th width="8%" style="text-align: center">Editar</th>
                    <th width="8%" style="text-align: center">Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $html = "";
                       foreach ($a_products as $product) {

                            $html .= "<tr id='product_id_".$product['id']."'><td>".$product['id']."</td>";
                            $html .= "<td>".$product['title']."</td>";
                            $html .= "<td>".$product['category_name']."</td>";                            
                            $html .= "<td style='text-align: center'>".$product['registered']."</td>";
                            $checked = $product['hot'] == 1 ? 'checked' : '';
                            $html .= "<td style='text-align:center'><input type='checkbox' $checked name='hot' id='activate_hot_".$product['id']."' onclick='(option_active_hot_telecomunicaciones(".$product['id']."))'></td>";
                            $label = $product['active'] == 1 ? 'Desactivar' : 'Activar';
                            $html .= "<td style='text-align: center'><input type='button' class='btn' value='".$label."' id='activate_".$product['id']."' onclick='(btn_active_product(".$product['id']."))'/></td>";
                            $html .= "<td style='text-align: center'><a href='./edit-product.php?product_id=".$product['id']."' class='btn'>Editar</a></td>";
                            $html .= "<td style='text-align: center'><input type='button' class='btn' value='Borrar' onclick='(btn_delete_product(".$product['id']."))'/></td></tr>";
                        }    
                       
                    }
                    echo $html;
                ?>
            </tbody>

        </table>  
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
  </body>
</html>



