<?php require 'header.php';?>

<main>
	<div class="container-fluid" style="background: #53687e; padding-bottom: 50px; ">
		<div class="row">
			<div class="col-6" style="padding-top: 30px; padding-bottom: 30px; ">
				<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 30px; padding-left: 20px; padding-bottom: 30px; width: 400px; height: 50px">
				  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				    <div class="navbar-nav">
				      <i class="icon-bar"></i><a class="nav-item nav-link active" href="#" style="padding-left: 15px; padding-right: 20px; font-size: 20px;">Bebidas <span class="sr-only">(current)</span></a>
				      <i class="icon-fast-food" style="padding-right: 10px; padding-top: 12px;"></i><a class="nav-item nav-link active" href="<?php echo RUTA; ?>/aplicaciones/base_datos/platillos.php" style="padding-right: 30px; padding-top: 13px;">Platillos <span class="sr-only">(current)</span></a>
				      <i class="icon-pharmacy"></i><a class="nav-item nav-link active" href="<?php echo RUTA; ?>/aplicaciones/base_datos/postres.php" style="padding-top: 13px;">Postres <span class="sr-only">(current)</span></a>
				    </div>
				  </div>
				</nav>
				<form style="padding-left: 20px; padding-top: 20px;" method="POST" action="agregar_bebida.php">
				  <div class="form-group">
				    <label  style="color:white;">Nombre del platillo</label>
				    <input type="text" name="nombre" class="form-control" i="" placeholder="Ingrese el nombre del producto">
				  </div>
				  <div class="form-group">
				    <label  style="color:white;">Descripción</label>
				    <input type="text" name="descripcion" class="form-control" id="" placeholder="Ingrese la description del producto">
				  </div>
				  <div class="form-group" style="width: 200px;">
				    <label  style="color:white;">Costo</label>
				    <input type="text" name="costo" class="form-control" id="" placeholder="Ingrese el costo">
				  </div>
				  <div class="form-group" style="width: 200px;">
				    <label  style="color:white;">Precio</label>
				    <input type="text" name="precio" class="form-control" id="" placeholder="Ingrese el precio final">
				  </div>
				  <button type="submit" style="padding-left: 20px;" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-6" style="padding-top: 30px; padding-bottom: 30px;  padding-bottom: 20px;">
				<div class="caja-tabla" style="background: white; margin-bottom: 50px;">
						<?php
							conexion($db_config);

						if ( isset( $_GET["q"] ) ){
							$q = $_GET["q"];
							$statement = $conexion->prepare('select * from productos where nombre like "%' . $q . '%"');	
						}else{
							$statement = $conexion->prepare('select * from productos where clave = "be" ');	
						}
						
						$statement->execute();

						checar_error("Error al intetar guardar el platillo");

						?>
						<div class="container" style="padding-top: 35px; padding-bottom: 30px; padding-left: 50px;">
								<div class="row">
							<form action="" method="GET" class="form-inline">
								<div class="col-md-8">
									<input type="tetx" name="q" class="form-control" placeholder="Buscar Bebida">
								</div>
								<div class="col-md-4">
									<input type="submit" value="Buscar" class="btn btn-primary">
								</div>
							</form>
								</div>
						</div>
					
							<?php
						print("<table border=1 class='table table-bordered table-striped'>");

						print("<tr> ");
						print("<th>ID</th>");
						print("<th>CLASE</th>");
						print("<th>NOMBRE</th>");
						print("<th>DESCRIPCION</th>");
						print("<th>COSTO</th>");
						print("<th>PRECIO</th>");
						print("</tr>");

						foreach ($statement->fetchALL() as $key => $value) {
						print("<tr>");
						print("<td>" . $value['id'] . "</td>");
						print("<td>" . $value['clave'] . "</td>");
						print("<td><a href='editar_bebida.php?id=".$value['id']. "'>". $value['nombre']. "</td>");
						print("<td>". $value['descripcion']. "</td>");
						print("<td>" . $value['costo'] . "</td>");
						print("<td>" . $value['precio'] . "</td>");
						print("</tr>");
						}	
						print("<table>");
						print("</table>");
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
</body>
</html>
<?php require 'footer.php'; ?>