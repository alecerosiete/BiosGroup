<?php
require '../admin/inc/session.inc';
require '../admin/inc/conexion-functions.php';
require '../admin/inc/sql-functions.php';
?>
<!DOCTYPE html>
<html>
  <head>
     
    <title>BiosGroup - Telecomunicaciones</title>
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
		<?php include '../inc/banner-telecomunicaciones.php';?>
         </div>
          <h2 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">BIENVENIDOS</h2>
         <div class="content-2">
             <div class="content-left-box" style="font-family:'SansSerfRegular';text-justify:justify ;font-size:16px;line-height: 20px; padding-top:40px">
           
                 La empresa fue establecida para la comercializacion de equipamientos  Informaticos, Electronicos y de Telecomunicaciones, dirigida al sector Publico y Privado.<br><br>
Representa y Distribuye marcas de renombre internacional tales como Exfo, Sumitomo, Eset entre otros.<br><br>
El Departamento Tecnico cuenta con Personal Certificado por Fabrica, para la prestacion de Servicios de Diagnostico, Soporte y Reparaciones.
                 
             </div>
            
              <div class="content-right-box" style="border:8px solid #ccc;height: 348px">
                 <?php include '../inc/banner-nuevos-productos-telecomunicaciones.php'?>
             </div>
             
              <div class="content-right-box" style="width: 400px;height: 234px;border:8px solid #ccc">
                  <?php include '../inc/camaras-ip-vea-online.php';?>
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
