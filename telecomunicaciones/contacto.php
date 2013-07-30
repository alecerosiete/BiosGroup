<?php
require '../admin/inc/session.inc';
require '../admin/inc/conexion-functions.php';
require '../admin/inc/sql-functions.php';

$db = conect();
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
                <?php 
                    $destinatario = "alecerosiete@gmail.com";
                    if (isset ($_POST['enviar'])) {
                                    
                        
                        $headers = "From: ".$_POST['email']. "rn";
                        $asunto = "Bios Group - Mensaje del formulario de contatos";
                        $contenido = "Nombre y apellido: ".stripcslashes ($_POST['nombre'])." ".stripcslashes ($_POST['apellido'])."\nCedula de Identidad: ".stripcslashes ($_POST['ci'])."\nTelefono: ".stripcslashes ($_POST['telefono'])."\nEmail: ".stripcslashes ($_POST['email'])."\nConsulta: ".stripcslashes ($_POST['consulta']);
                        if ( mail ($destinatario,$asunto,$headers)){
                                setSuccess("Enviado correctamente");
                                include("../admin/tmpl/success_panel.inc");
                        }else {
                                addError("No se pudo enviar su mensaje, intentelo nuevamente");
                                include("../admin/tmpl/error_panel.inc");
                        }    

                   }
                        
                ?> 
                <div class="formulario_contactos" style='margin-left:20%;'>
                   <form class="form-horizontal" action='./contacto.php' method='post' name='contacto.php' id='contacto.php'>
                    <div class="control-group">
                      <!-- /Nombres -->
                      <label class="control-label"  for="nombres">Nombres: </label>
                      <div class="controls" ><input name='nombre' type="text" class="input-xlarge" id="nombre" placeholder="Nombres" required></div>
                      <!-- /Apellidos --><br>
                      <label class="control-label" for="apellidos">Apellidos: </label>
                      <div class="controls"><input name='apellido' type="text" id="apellido" class="input-xlarge" required placeholder="Apellidos"></div>
                      <!-- /Empresa -->       <br>               
                      <label class="control-label" for="ci">Cedula de Identidad:</label>
                      <div class="controls"><input name='ci' type="text" id="ci" class="input-xlarge" required placeholder="Cedula de identidad"></div>
                      <!-- /Telefono -->     <br>                 
                      <label class="control-label" for="telefono">Teléfono:</label>
                      <div class="controls"><input name='telefono' type="text" id="telefono" class="input-xlarge" placeholder="Telefono"></div>
                      <!-- /Email -->       <br>               
                      <label class="control-label" for="email">Email:</label>
                      <div class="controls"><input name='email' type="email" id="email" class="input-xlarge" placeholder="Email" required></div>
                      <!-- /Consulta -->      <br>                
                      <label class="control-label" for="consulta">Consulta:</label>
                      <div class="controls"><textarea rows="4" id="consulta" class="input-xlarge" name="consulta" required ></textarea>
                      </div>
                      <!-- /Enviar -->        
                      <center>
                      <br><button class="btn btn-large" id="btn-enviar" name="enviar" type="submit">Enviar</button>
                      <button class="btn btn-large" id="btn-enviar" name="enviar" type="reset">Cancelar</button>
                      </center>
                      </div>
                       </form>
                    </div>
                 
                    
                <div class="clearfix"></div>
            </div>
                
                <!-- ventas@biosgroup.com.py -->
               
          </div>
         
         <div class="footer">
              <?php include_once '../inc/footer.php';?>
         </div>
      </div>

    <script src="../js/bootstrap.js"></script>
   
   
  </body>
</html>
