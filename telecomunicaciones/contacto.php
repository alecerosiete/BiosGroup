<?php
require '../admin/inc/session.inc';
require '../admin/inc/conexion-functions.php';
require '../admin/inc/sql-functions.php';
?>
<!DOCTYPE html>
<html>
  <head>
     
    <title>BiosGroup - Contáctenos</title>
    <?php include '../inc/header.php'; ?>
    <style>   
        a {
            text-decoration: none;
            color: #fff;
        }
        a:hover {
            color:#ccc;
            text-decoration: none;
        }
    </style>

  </head>
  <body>
      <div class="container"> 
          
        <div class="header">
            <div class="btn-categorias";>
                    <div class="btn-categorias">
                    <a href="../index.php"><div style="height:104px;width:400px"></div> </a>
                </div>
            </div>
        </div>
          <?php include '../inc/menu.php';?>
          
         <div class="banner" style="margin-top:0">
			<?php include '../inc/banner-telecomunicaciones.php';?>
          
         </div>
           <h2 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">CONTÁCTENOS</h2>
          <div class="container">
            <div class="span11  content-left-box" style="text-align:justify;font-family:'SansSerfRegular';font-size:16px;line-height: 20px;">
                <p>Si desea hacernos alguna consulta, sugerencia o pedido, le invitamos a completar el siguiente formulario, su consulta nos interesa, muchas gracias.</p>
                <!-- ventas@biosgroup.com.py -->
                <div class="formulario_contactos">
                   <form class="form-horizontal">
                    <div class="control-group">
                      <!-- /Nombres -->
                      <label class="control-label" for="nombres">Nombres: </label>
                      <div class="controls"><input type="text" class="input-xlarge" id="nombre" placeholder="Nombres" required></div>
                      <br><!-- /Apellidos -->
                      <label class="control-label" for="apellidos">Apellidos: </label>
                      <div class="controls"><input type="text" id="apellido" class="input-xlarge" name="apellido" required placeholder="Apellidos"></div>
                      <br><!-- /Empresa -->                      
                      <label class="control-label" for="empresa">Empresa:</label>
                      <div class="controls"><input type="text" id="empresa" class="input-xlarge" placeholder="Empresa"></div>
                      <br><!-- /Telefono -->                      
                      <label class="control-label" for="telefono">Teléfono:</label>
                      <div class="controls"><input type="text" id="telefono" class="input-xlarge" name="telefono" placeholder="Telefono"></div>
                      <br><!-- /Email -->                      
                      <label class="control-label" for="email">Email:</label>
                      <div class="controls"><input type="email" id="email" class="input-xlarge" name="email" placeholder="Email" required></div>
                      <br><!-- /Consulta -->                      
                      <label class="control-label" for="consulta">Consulta:</label>
                      <div class="controls"><textarea rows="4" id="consulta" class="input-xlarge" name="consulta" required ></textarea>
                      <!-- /Enviar -->         
                      <br><br><button class="btn btn-large" id="btn-enviar" name="enviar" type="button">Enviar</button></div>
                      <br>
                      
                    </div>
                 </form>
                </div>
                
                
                
                <div class="clearfix"></div>
            </div>
          </div>
         
         <div class="footer">
              <?php include_once '../inc/footer.php';?>
         </div>
      </div>

    <script src="../js/bootstrap.js"></script>
   
   
  </body>
</html>
