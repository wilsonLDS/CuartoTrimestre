<?php 
if(isset($_GET['inbox'])){
  session_start();
}
if(isset($_SESSION['email'])){
  //Encabezado de la pagina
  include ('templates/head.php');
  //validar errores
  if(isset($_GET['error'])){
    include ('errors/errors.php');
  }
  ?>

  <div class="container spacing-top">
    <div class="row">


        <center>
          
          <figure>
            <?php include('partials/genre.php') ?>
          </figure>

        </center>

      </div>

        
        <?php
          if(isset($_SESSION['usuario'])){
            echo '<h2 class="title-h5">Bienvenid@: <i>', $_SESSION['usuario'] . '</i></h2>';
          }
          ?>  
      </div>
      <div class="col-12 bg-secondary">
        <?php include('forms/form_inb.php'); ?>
      </div>
    </div>
  </div>

  <?php include ('templates/foot.php');  
}else{
    header('Location: http://localhost/webmail/index.php');
  } 
?>