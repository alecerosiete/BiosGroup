<?php

?>
<!-- Carousel
================================================== -->
           <div id="banner-nuevos-productos-electromedicina" class="carousel slide">
             <div class="carousel-inner">
               
                 <!-- Obtiene las imagenes -->
                 <?php
                 
                    $a_banner = getBanner('nuevos_prod_electromedicina');
                    //print_r($a_banner);
                    $active = 0;
                    foreach ($a_banner as $banner) {
                        
                        if($active == 0){
                           echo "<div class='item active'>";
                           $active = -1;
                        }else{
                           echo "<div class='item'>";
                        }
                                   
                        echo "<img src='../admin/resources/images/banner/".$banner['banner_name']."' alt='$banner'>";
                        echo "<div class='container'></div>";
                        ?>
                        <div class="carousel-caption">
                            <h1><?= $banner['banner_title'] ?></h1>
                            <p class="lead"> <?= $banner['banner_text'] ?></p>

                        </div>

                        
                        
                        <?php
                        echo "</div>";
                        
                    }       
                  
                  
                 ?>                               
                 
             </div>
                <?php
                if (empty($a_banner)){
                        echo "<div class='alert alert-danger'>No se encontro ningun banner </div>";

                }else{                        
                ?>
                  <a class="left carousel-control" href="#banner-nuevos-productos-electromedicina" data-slide="prev">&lsaquo;</a>
                  <a class="right carousel-control" href="#banner-nuevos-productos-electromedicina" data-slide="next">&rsaquo;</a>
                 <?php
                }
                ?>
           </div>
           <!-- /.carousel -->