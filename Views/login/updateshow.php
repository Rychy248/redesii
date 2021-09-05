<div class="container">
	<h2>Actualizar Usuarios</h2>
	<form action="?controller=login&&action=update" method="POST">
		<input type="hidden" name="usuario" value="<?php echo $user->getUser() ?>" >
		<div class="form-group">
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $user->getUser() ?>">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="text" name="password" id="password" class="form-control" value="<?php echo $user->getPassword(); ?>">
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>
</div>