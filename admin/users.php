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
         <h3>Actualizaci&oacute;n de Usuarios</h3>
         <div align="center">
             <div class="hero-unit-interno">
                <form name="form" method="post" action="#">
                  <input type="hidden" id="user-id" name="user-id"/>
                  <input type="hidden" id="user-activate" name="user-activate"/>
                </form>

                <table class="table table-bordered table-hover" >
                  <thead>
                    <tr>
                      <td width="15%" style="text-align: center">Usuario</td>
                      <td width="30%" style="text-align: center">Nombre completo</td>
                      <td width="15%" style="text-align: center">Grupo</td>
                      <td colspan = 3 style="text-align: center"><a class="btn" href="./user-insert.php">Nuevo usuario</a></td>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $users = getUsers();             
                    
                    foreach($users as $item){
                      $username = $item['username'];
                      
                      ?>
                      <tr>
                      <td style="text-align: center"><?=$username?></td>
                      <td style="text-align: center" class="grey"><?=$item['nombre']?>&nbsp;</td>
                      <td style="text-align: center"><?=$item['perfil_de_usuario']?>&nbsp;</td>
                     
                      <?php
                        $html = "";
                        $label = $item['active'] == 1 ? 'Desactivar' : 'Activar';
                        $html .= "<td style='text-align: center'><input type='button' class='btn' value='".$label."' id='activate_".$item['id']."' onclick='(btn_active_user(".$item['id']."))'/></td>";
                        $html .= "<td style='text-align: center'><a href='./edit-user-action.php?id=".$item['id']."' class='btn'>Editar</a></td>";
                        $html .= "<td style='text-align: center'><a href='./actions/delete-user-action.php?id=".$item['id']."' class='btn'>Borrar</a></td></tr>";
                        echo $html;
                    }
                    $db = null;
                    ?>
      
                  </tbody>
                </table>
             </div>
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
  </body>
</html>