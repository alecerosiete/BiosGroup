<?php
//assertUser();
//$user = getUser();

?>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.php">BiosGroup</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="./index.php">Home</a></li>
              <li><a href="./category.php">Categorias</a></li>
              <li><a href="./product.php">Productos</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Usuarios</a></li>
                  <li><a href="#">Mi cuenta</a></li>
                  <li><a href="#">Ayuda</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Session</li>
                  <li><a href="#">Salir</a></li>
                  
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
                <a href="../index.php" style="float:left;margin-right: 20px" target="_blank" class="btn">Visualizar P&aacute;gina </a>
                <div style="color:#fff;padding-top:10px;margin-right: 10px;float:left">Conectado como: <?= $user['data']['nombre'] ?></div>
                 <a style="float:left" href="./login.php" class="btn btn-warning">Salir</a>
           </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>