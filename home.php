<?php
  $page_title = 'Página principal';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
<<<<<<< HEAD
         <img src="./uploads/users/fondohome.png"/>
=======
         <h1>Aquí se presentarán los detalles de las opciones de la izquierda</h1>
>>>>>>> 26ad57dfbc72495c3339ee9bf6182da13a72b73c
     
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
