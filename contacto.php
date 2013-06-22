
<!DOCTYPE html>
<html>
  <head>
     
    <title>BiosGroup - Contáctenos</title>
    <?php include './inc/header.php'; ?>
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
                    <span style="border-right:1px solid #fff;padding-right: 5px;;font-weight:bold">
                        <a href="#">Equipos Médicos</a></span>
                    <span style="font-weight:bold"> <a href="#">Telecomunicaciones</a></span>
            </div>
        </div>
          <?php include './inc/menu.php';?>
          
         <div class="banner" style="margin-top:0">
			<object type="application/x-shockwave-flash" 
			width="940" height="260" data="./img/banner_arriba.swf">
			<param name="movie" value="./img/banner_arriba.swf">

			</param>
			</object>
          
         </div>
           <h2 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">CONTÁCTENOS</h2>
          <div class="container">
            <div class="span11" style="text-align:justify;font-family:'SansSerfRegular'">
                <p>Si desea hacernos alguna consulta, sugerencia o pedido, le invitamos a completar el siguiente formulario, su consulta nos interesa, muchas gracias.</p>
                
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
             
         </div>
      </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
   
    <!-- import jQuery -->
    <script type="text/javascript" src="estro/js/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="estro/js/preview.js"></script>
    
    <script type="text/javascript" src="estro/js/pe.kenburns/jquery.pixelentity.kenburnsSlider.min.js"></script>
    
    <!--specify size of slider-->
      
      
      <script>

        jQuery(function($){
          $(".peKenBurns").peKenburnsSlider({externalFont:true})
        })
        // for google fonts, handle captions sizing only after fonts are loaded
        jQuery(window).load(function() {
          $(".peKenBurns").each(function() {
            $(this).data("peKenburnsSlider").fontsLoaded()
          })
        })
        
      </script>


  </body>
</html>
