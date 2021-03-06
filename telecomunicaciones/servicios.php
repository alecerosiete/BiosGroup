<?php
require '../admin/inc/session.inc';
require '../admin/inc/conexion-functions.php';
require '../admin/inc/sql-functions.php';
?>
<!DOCTYPE html>
<html>
  <head>
     
    <title>BiosGroup - Servicios</title>
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
           <h2 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">SERVICIOS</h2>
          <div class="container">
            <div class="span11  content-left-box" style="text-align:justify;font-family:'SansSerfRegular';font-size:16px;line-height: 20px;">
                <p>
                    *Proyectos, Diagnósticos y Consultorías.
                </p>
                <p>
                    *Cableado estructurado para redes telefónicas e Informáticas.
                </p>
                <p>
                    *Montaje e Instalación de servidores y centro de cómputos (Data Center). 
                </p>
                <p>
                    *Cableado de Fibra Óptica, fusión y certificación.
                </p>
                <p>
                    *Instalación de centrales telefónicas.
                </p>
                <p>
                    *Implementación de comunicaciones unificada (Telefonía IP, Call Center).
                </p>
                <p>
                    *Mantenimiento preventivo y correctivo de equipos informáticos, electrónicos y comunicaciones.
                </p>
                <p>
                    *Servicio técnico en situaciones de emergencias.
                </p>
                <p>

                *Actualización de Software y Hardware.
                </p>

                <p>
                    *Soluciones Integrales de Comunicaciones para Seguridad Pública 911 (Intrado).
                </p>

                <p>
                    *Venta de equipos de Telecomunicación e Informática con el soporte técnico de los mismos.
                </p>

                <p>
                    *Soluciones con cámaras IP.
                </p>

                <p>
                    *Soporte al cliente en cuestiones de operación y mantenimiento de equipos.
                </p>
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
