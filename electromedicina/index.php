<?php
require '../inc/config.php';
require '../admin/inc/conexion-functions.php';
require '../admin/inc/sql-functions.php';

$db = conect();
?>
<!DOCTYPE html>
<html>
  <head>
     
    <title>BiosGroup - Electromedicina</title>
    <?php
        include '../inc/header.php';

    ?>

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
            <div class="btn-categorias">
                  <div class="btn-categorias">
                    <a href="../index.php"><div style="height:104px;width:400px"></div> </a>
                </div>
            </div>
        </div>
          
         <?php include '../inc/menu.php';?>
         
         
         <div class="banner" style="margin-top:0">
			<?php include '../inc/banner-electromedicina.php';?>
         </div>
          <h2 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">BIENVENIDOS</h2>
         <div class="content-2">
             <div class="content-left-box" style="font-family:'SansSerfRegular';text-justify:justify ;font-size:16px;line-height: 20px; padding-top:40px">
           
                 La empresa fue establecida para la comercialización de equipamientos médicos, y el 
servicio técnico de los mismos, dirigida al sector Público y Privado.<br><br>


Representa y Distribuye marcas de renombre internacional tales como Radcal, Wandong, 
Sonoscape, Genoray, entre otros.<br><br>


El Departamento Técnico cuenta con Personal Certificado por Fábrica, para la prestación 
de Servicios de Diagnóstico, Soporte y Reparaciones.<br><br>

La empresa cuenta la habilitación del Ministerio de Salud pública y Bienestar Social para la 
Comercialización, Servicio de mantenimiento y Medición de Parámetros Radiológicos de 
Equipos Médicos. <br>
             </div>
             <div class="content-right-box">
                 <object type="application/x-shockwave-flash" 
					width="400" height="263" data="../img/nuevos_productos.swf">
					<param name="movie" value="../img/nuevos_productos.swf">

					</param>
					</object>
             </div>
             <div class="content-right-box">
                 <! - - object type="application/x-shockwave-flash" 
					width="400" height="263" data="../img/nuevos_productos.swf">
					<param name="movie" value="../img/nuevos_productos.swf">

					</param>
					</object-->
             </div>
             <div class="clearfix"></div>
         </div>
         <div class="content-3">
             <div class="box">
                 <div class="box-title">
                    <img src="../img/ae_bg.png"> 
                 </div>
                 <div class="box-content-ae-bg">
                     Hemos creado un departamento a<br>
                     disposición de nuestros clientes<br>
                     para ofrecer un asesoramiento<br>
                     personalizado para análisis y<br>
                     diseño, que le permitirá<br>
                     en cada caso, conocer<br>
                     de forma práctica<br>
                     como implementar nuevas<br>
                     tecnologias, acorde a las<br>
                     necesidades de su empresa.
                 </div>
                  
             </div>
              <div class="box">
                 <div class="box-title">
                    <img src="../img/efi_bg.png">
                 </div>
                 <div class="box-content-ef-bg">
                     Todos estos servicios se los ofrecems<br>
                     con la máxima seriedad, rapidez y<br>
                     seguridad, apoyados por el<br>
                     asesoramiento de un equipo de<br>
                     pofesionales especializados<br>
                     en el tema y ue permanecen<br> 
                     siempre a su disposición<br>
                     para ofrecerle un<br>
                     buen servicio.
                 </div>
             </div>
              <div class="box">
                 <div class="box-title">
                    <img src="../img/eco_bg.png">
                 </div>
                 <div class="box-content-eco-bg">
                     Todos nuestros trabajos están enfocados<br>
                     a ofrecerle unos productos y servicios de<br>
                     calidad a un buen precio.
                 </div>
             </div>
             <div class="clearfix"></div>
         </div>
         <div class="footer">
              <?php include_once '../inc/footer.php';?>
         </div>
      </div>

   
  </body>
</html>
