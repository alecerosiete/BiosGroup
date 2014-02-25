<?php
require '../inc/config.php';
require '../admin/inc/conexion-functions.php';
require '../admin/inc/sql-functions.php';

$product_id = $_GET['product-id'];
$product = getProductById($product_id);


?>


<!DOCTYPE html>
<html>
  <head>
     
    <title>BiosGroup - Productos</title>
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
           
                <div class="btn-categorias">
                    <a href="../index.php"><div style="height:104px;width:400px"></div> </a>
                </div>
           
        </div>
          <?php include '../inc/menu.php';?>
          
         <div class="banner" style="margin-top:0">
			<?php include '../inc/banner-telecomunicaciones.php';?>
          
         </div>
          <style>
              
                .producto_detalle{
                    width: 900px;
                    height: 364px;
                    border:8px solid #dfdfdf;
                    background: #ffffff
                }
                .producto_detalle_img{
                    float:left;
                    width: 326px;
                    background:  #ffffff;
                    height: 100%;
                    
                }
                .producto_detalle_desc{
                    float:left;
                    width: 554px;
                    margin-left: 20px;
                    height: 320px;
                }
          </style>
           <h3 style="font-family:'SansSerfRegular';margin-left: 25px;color: #3860a5">CARACTERISTICAS</h3>
          <div class="container">
            <div class="span11" style="text-align:justify;font-family:'SansSerfRegular'">
               
                <div class="clearfix"></div>
            </div>
          </div>
         <div class="container">
               <div class="span11" >
                   <!-- inicio producto -->
                    <div class="producto_detalle" >
                      <div class="producto_detalle_img" style="background: #ffffff  url(../img/products/<?=$product['image']?>) no-repeat center; background-size:contain;">
                      </div>
                        <div class="producto_detalle_desc" >
                          <div style="height: 365px;overflow-y:auto">
                            <h3><?=$product['title']?></h3>
                            <h5>CARACTERISTICAS</h5>
                            <p>
                                <?=$product['description']?>
                            </p>
                          </div>
                         
                       </div>
                       <div class="span11">
                              <a style="margin-top:15px;" href="javascript:history.go(-1)" class="btn">Atras</a>
                       </div>  
                    </div>
                   <!-- fin producto -->
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


