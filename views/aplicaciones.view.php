<?php 
require 'header.php';
?>
<main>
	<div class="container-fluid " style=" padding-top: 20px; padding-bottom: 20px;">
	 	<div class="row" >
	 		<div class="col-12">
	 			<div class="d-flex justify-content-center">
	 				<h2 style="color:white;">Aplicaciones</h2>
	 			</div>
	 		</div>
	 	</div>
		<div class="container d-flex justify-content-around">
	 		<div class="row" style="padding-top: 10px;">
	 			<div class="col-4">
	 				<div class="card text-center" style="width: 18rem;">
					  <img src="<?php echo RUTA; ?>/img/aplicaciones/images.png" width="200" height="200" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Punto de Venta</h5>
					    <p class="card-text">¡Comience a vender!</p>
					    <a href="<?php echo RUTA; ?>/aplicaciones/puntodeventa.php" class="btn btn-primary">Acceder</a>
					  </div>
					</div>
	 			</div>
	 			<div class="col-4">
	 				<div class="card text-center" style="width: 18rem;">
					  <img src="<?php echo RUTA; ?>/img/aplicaciones/db.jpg" width="200" height="200" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Editor de bases de datos</h5>
					    <p class="card-text">Agregue o modifique productos.</p>
					    <a href="<?php echo RUTA; ?>/aplicaciones/base_datos/base_datos.php" class="btn btn-primary">Acceder</a>
					  </div>
					</div>
	 			</div>
	 			<div class="col-4">
	 				<div class="card text-center" style="width: 18rem;">
					  <img src="<?php echo RUTA; ?>/img/aplicaciones/office.png" width="200" height="200" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">MiOficina</h5>
					    <p class="card-text">Herramientas administrativas.</p>
					    <a href="#" class="btn btn-primary">Acceder</a>
					  </div>
					</div>
	 			</div>
	 		</div>	
	 	</div>	
	 	<div class="container d-flex justify-content-around" style="padding-top: 10px;">
	 		<div class="row" style="padding-top: 10px;">
	 			<div class="col-4">
	 				<div class="card text-center" style="width: 18rem;">
					  <img src="<?php echo RUTA; ?>/img/aplicaciones/inv.png" width="200" height="200" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Control de inventarios</h5>
					    <p class="card-text">Actualice sus inventarios.</p>
					    <a href="#" class="btn btn-primary">Acceder</a>
					  </div>
					</div>
	 			</div>
	 			<div class="col-4">
	 				<div class="card text-center" style="width: 18rem;">
					  <img src="<?php echo RUTA; ?>/img/aplicaciones/cc.png" width="200" height="200" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Circuito cerrado</h5>
					    <p class="card-text">Controle la seguridad.</p>
					    <a href="#" class="btn btn-primary">Acceder</a>
					  </div>
					</div>
	 			</div>
	 			<div class="col-4">
	 				<div class="card text-center" style="width: 18rem;">
					  <img src="<?php echo RUTA; ?>/img/aplicaciones/settings.png" width="200" height="175" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Sistema</h5>
					    <p class="card-text">Modifique los datos de su empresa.</p>
					    <a href="#" class="btn btn-primary">Acceder</a>
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