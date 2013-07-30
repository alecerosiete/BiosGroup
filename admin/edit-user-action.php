<?php
require './inc/session.inc';
assertUser();

require './inc/conexion-functions.php';
require './inc/sql-functions.php';
$user_id = mysql_real_escape_string($_GET['id']);

$user_data = getUserById($user_id);
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
         <h3>Editar Usuario</h3>
         <div align="center">
             <div class="hero-unit-interno">
               <form action="./actions/user-edit-do.php" method="post">
                    <table >
                      <tbody>
                        <tr>
                          <td >Usuario</td>
                          <td >
                            <input type="text" name="username" disabled value="<?= $user_data['username']?>">
                            <input type="hidden" name="username" value="<?= $user_data['username']?>">
                          </td>
                        </tr>
                        <tr>
                          <td >Nombre</td>
                          <td >
                            <input type="text" name="nombre" value="<?=$user_data['nombre']?>"
                                   size="60" maxlength="100"/>
                          </td>
                        </tr>
                        <tr>
                          <td class="form-label">Estado</td>
                          <td class="form-value">
                              <select name="active">
                              <?=$user_data['active'] == 1 ? "<option selected value=1>Activo</option>
                                                         <option value=0>Inactivo</option>"
                                                      : "<option value=1>Activo</option>
                                                         <option selected value=0>Inactivo</option>"
                                                        ;?>
                              </select>
                          </td>
                        </tr>
                        
                        <tr>
                          <td class="form-label">Contrase&ntilde;a</td>
                          <td class="form-value">
                            <input type="password" name="password" size="20" maxlength="20"/>
                          </td>
                        </tr>

                        <tr>
                          <td class="form-label">Confirmaci&oacute;n</td>
                          <td class="form-value">
                            <input type="password" name="confirm-pw" size="20" maxlength="20"/>
                          </td>
                        </tr>

                        <tr>
                          <td colspan="2" class="form-control" align="center">
                            <input class="btn" type="reset" value="Restaurar"/>
                            <input class="btn" type="submit" name="btn_submit" value="Aceptar"/>
                            <input class="btn" type="button" onclick="javascript:window.history.back()" value="Cancelar"/>
                          </td>
                        </tr>

                      </tbody>
                    </table>

                  </form>
                
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