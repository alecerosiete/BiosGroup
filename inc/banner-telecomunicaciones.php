<?php


$db = conect();
?>
<!-- Carousel
================================================== -->
           <div id="myCarousel" class="carousel slide">
             <div class="carousel-inner">
               
                 <!-- Obtiene las imagenes -->
                 <?php
                 
                    $a_banner = getBanner('banner_telecomunicaciones');
                    
                        $active = 0;
                        foreach ($a_banner as $banner) {
                            if($banner['active'] == 1){
                                if($active == 0){
                                   echo "<div class='item active'>";
                                   $active = -1;
                                }else{
                                   echo "<div class='item'>";
                                }
                                if($banner['id_product'] > 0){
                                echo "<div align='center'><a href='./product-detail.php?product-id=".$banner['id_product']."'><img align='center' src='../admin/resources/images/banner/".$banner['banner_name']."' alt=".$banner['banner_title']."></a></div>";   
                                }else{
                                    echo "<div align='center'><a href='#'><img align='center' src='../admin/resources/images/banner/".$banner['banner_name']."' alt=".$banner['banner_title']."></a></div>";   
                                 
                                }
                                
                                echo "<div class='container'></div>";
                                ?>
                                <div class="carousel-caption">
                                    <h1><?= $banner['banner_title'] ?></h1>
                                    <p class="lead"> <?= $banner['banner_text'] ?></p>

                                </div>
                                <?php
                                echo "</div>";

                            }       
                        }
                  
                 ?>                               
                 
             </div>
                <?php
                if (empty($a_banner)){
                        echo "<div class='alert alert-danger'>No se encontro ningun banner </div>";

                }else{                        
                ?>
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                 <?php
                }
                ?>
           </div>
           <!-- /.carousel -->