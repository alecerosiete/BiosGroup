<?php

?>
<!-- Carousel
================================================== -->
           <div id="banner-nuevos-productos-telecomunicaciones" class="carousel_mini slide">
             <div class="carousel-inner">
               
                 <!-- Obtiene las imagenes -->
                 <?php
                    $a_products_hot = getProductsHot('product');
                    //$a_banner = getBanner('banner_electromedicina');
                    //print_r($a_banner);
                    $active = 0;
                    foreach ($a_products_hot as $banner) {
                        
                        if($active == 0){
                           echo "<div class='item active'>";
                           $active = -1;
                        }else{
                           echo "<div class='item'>";
                        }
                                   
                            echo "<center><a href='./product-detail.php?product-id=".$banner['id']."'><img src='../img/products/".$banner['image']."' alt='$banner'></a></center>";
                        echo "<div class='container'></div>";
                        ?>
                        <div class="carousel-caption-mini">
                            <h4><?= $banner['title'] ?></h4>
                            

                        </div>

                        
                        
                        <?php
                        echo "</div>";
                        
                    }       
                  
                  
                 ?>                               
                 
             </div>
                <?php
                if (empty($a_products_hot)){
                        echo "<div class='alert alert-danger'>No se encontro ningun banner </div>";

                }else{                        
                ?>
                  <a class="left carousel-control" href="#banner-nuevos-productos-telecomunicaciones" data-slide="prev">&lsaquo;</a>
                  <a class="right carousel-control" href="#banner-nuevos-productos-telecomunicaciones" data-slide="next">&rsaquo;</a>
                 <?php
                }
                ?>
           </div>
           <!-- /.carousel -->