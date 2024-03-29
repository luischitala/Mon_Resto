<?php require 'header.php'; ?>

<main>
	<div class="container-fluid main" style="background:#53687e; height: 525px; ">
		<div class="row justify-content-center" style="padding-top:10px;">
			<h2 style="color:white; text-align: center;">Bienvenido a la aplicación MonResto</h2>
			<div class="col-8 d-flex" style="padding-top: 40px;">
				<div class="col-6">
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login" class="formulario">
				  <div class="form-group" class="formulario" name="login">
				  	<i class="icon-user-male" style="color:white;"></i>
				    <label style="color:white;">Usuario</label>
				    <input type="text" class="form-control user" name="user" placeholder="Usuario">
				  </div>
				  <div class="form-group">
				  	<i class="icon-lock" style="color:white;"></i>
				    <label  style="color:white;">Contraseña</label>
				    <input type="password" class="form-control password" name="password"  placeholder="Contraseña" >
				  </div>
				  <div class="form-check" style="padding-left: 25px;">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1" >
				    <label class="form-check-label" for="exampleCheck1" style="color:white; padding-top: 0;">Recuérdame</label>
				  </div>
				<div class="form-group">
				  	<i class="btn btn-primary" onclick="login.submit()">Iniciar Sesión</i>
				</div>
				 <?php if(!empty($errores)): ?>
				  <div class="error">
				  	<ul>
				  		<?php echo $errores; ?>
				  	</ul>
				  </div>
				  <?php endif; ?>
					</form>
					<p>
						<h4 style="color:white; text-align: center;">¿No tienes cuenta?</h4>
						<a href="registro.php" style="color:white; font-size: 20px; padding-left: 150px;">Regístrate</a>
					</p>
				</div>
				<div class="col-6 d-flex justify-content-end" style="padding-top: 30px;">
					<img src="img/person-icon.png" width="200px" height="200px">
				</div>
			</div>
		</div>
	</div>
</main>


<?php require 'footer.php'; ?>