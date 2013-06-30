<?php
/*if(hasSuccess()) {
  ?>
<div id="success-panel">

  <h3><?=$_SESSION[S_SUCCESS]?></h3>

</div>

  <?php
  clearSuccess();
}*/
if(hasSuccess()) {
  ?>

      <?php
      foreach($_SESSION[S_SUCCESS] as $item ) {
        ?>

            <div class="alert alert-success">
                 <strong>Exitoso!</strong></br> <?=$item?>.
            </div>

        <?php
      }
      ?>



  <?php
  clearSuccess();
}
?>