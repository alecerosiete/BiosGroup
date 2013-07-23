<?php
require '../admin/inc/session.inc';
require '../admin/inc/conexion-functions.php';
require '../admin/inc/sql-functions.php';
?>
<!DOCTYPE html>
<html>
  <head>
     
    <title>BiosGroup - Representaciones</title>
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
           <h2 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">REPRESENTACIONES</h2>
          <div class="container">
            <div class="span11" style="text-align:justify;font-family:'SansSerfRegular';font-size:16px;line-height: 20px;">
               
                <div class="clearfix"></div>
            </div>
          </div>
           <div class="container">
               <div class="span11" >
                   <div class="representaciones" >
                        
                        <img src="../img/repre_telecom.png" style="width:892px">
                    </div>                 
                   
                       
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
