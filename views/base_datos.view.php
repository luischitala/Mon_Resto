<?php 
require 'header.php';
?>

<main>
	<div class="container-fluid " style=" padding-top: 20px; padding-bottom: 20px;">
	 	<div class="row" >
	 		<div class="col-12">
	 			<div class="d-flex justify-content-center">
	 				<h2 style="color:white;">Edición de base de datos</h2>
	 			</div>
	 		</div>
	 	</div>
		<div class="container d-flex justify-content-around">
	 		<div class="row" style="padding-top: 10px;">
	 			<div class="col-4">
	 				<div class="card text-center" style="width: 18rem;">
					  <img src="<?php echo RUTA; ?>/imgbd/bebidas/bebidas.jpg" width="200" height="200" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Bebidas</h5>
					    <p class="card-text">Agregue o modifique una bebida</p>
					    <a href="<?php echo RUTA; ?>/aplicaciones/base_datos/bebidas.php" class="btn btn-primary">Acceder</a>
					  </div>
					</div>
	 			</div>
	 			<div class="col-4">
	 				<div class="card text-center" style="width: 18rem;">
					  <img src="<?php echo RUTA; ?>/imgbd/platillos/platillos.jpg" width="200" height="200" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Platillos</h5>
					    <p class="card-text">Agregue o modifique un platillo</p>
					    <a href="<?php echo RUTA; ?>/aplicaciones/base_datos/platillos.php" class="btn btn-primary">Acceder</a>
					  </div>
					</div>
	 			</div>
	 			<div class="col-4">
	 				<div class="card text-center" style="width: 18rem;">
					  <img src="<?php echo RUTA; ?>/imgbd/postres/postres.jpg" width="200" height="200" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Postres</h5>
					    <p class="card-text">Agregue o modifique un postre</p>
					    <a href="<?php echo RUTA; ?>/aplicaciones/base_datos/postres.php" class="btn btn-primary">Acceder</a>
					  </div>
					</div>
	 			</div>
	 		</div>	
	 	</div>	
	</div>	
</main>



<?php
require 'footer.php';
 ?>