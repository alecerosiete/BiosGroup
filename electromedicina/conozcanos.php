<?php
require '../inc/config.php';
require '../admin/inc/conexion-functions.php';
require '../admin/inc/sql-functions.php';

$db = conect();
?>
<!DOCTYPE html>
<html>
  <head>
     
    <title>BiosGroup - Conózcanos</title>
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
			<?php include '../inc/banner-electromedicina.php';?>
          
         </div>
           <h2 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">LA EMPRESA</h2>
          <div class="container">
            <div class="span11 content-left-box" style="text-align:justify;font-family:'SansSerfRegular';font-size:16px;line-height: 20px;">
               
                    <p>BIOS GROUP S.R.L. es una empresa creada en el año 2002, con cede comercial en Tte. 

Martinez Ramella Nº 1.350, Asunción, Paraguay.</p>

<p>El staff de BIOS GROUP está integrado por personal idóneo en cada una de las 
especialidades en la que presta sus Servicios y con un amplio respeto por satisfacer las 
expectativas del cliente, así como un alto grado de ética de cada uno de sus miembros.</p>

<p>Nuestro sitio web tiene como objetivo presentar la estructura organizacional de los diversos 
Departamentos de BIOS GROUP, para Venta y Servicio Técnico de Equipos Médicos, 
de modo que facilite la comunicación entre CLIENTE - BIOS GROUP, buscando así 
una apariencia constante y transparente, desde el primer contacto hasta finalización del 
proyecto.</p>

<p>La empresa fue establecida para la actividad de Venta de equipos Médicos y Asistencia 
Técnica de los mismos, dirigida al sector público y privado, nuestro personal Técnico 
cuenta con formación universitaria y capacitación en el extranjero.</p>


<p>La empresa cuenta con las habilitaciónes correspondientes del Ministerio de Salud Pública 
y Bienestar Social.</p>




                <div class="clearfix"></div>
            </div>
          </div>
         
         <div class="footer">
              <?php include_once '../inc/footer.php';?>
         </div>
      </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
   
   
  </body>
</html>
