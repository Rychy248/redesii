

<div class="container">
	<h2>Lista Usuarios</h2>
	<form class="form-inline" action="?controller=login&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="usuario" name="usuario" type="text" placeholder="Busqueda por Usuario">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-search"> </span> Buscar</button>
			</div>
		</div>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Usuario</th>
					<th>Contraseña</th>
					<th>metodo</th>
					<th>Estado</th>
					<th colspan="2">Acciones</th>
				</tr>
				<tbody>
					<?php foreach ($listaUsers as$user) {?>

					
					<tr>
						<td> <a href="?controller=login&&action=updateshow&&usuario=<?php  echo $user->getUser()?>"> <?php echo $user->getUser(); ?></a> </td>
						<td><?php echo $user->getPassword(); ?></td>
						<td><?php echo $user->getMetodo(); ?></td>
						<td><?php if ( $user->getEstado()=='checked'):?>
							Activo
						<?php  else:?>
							Inactivo
						<?php endif; ?></td>
						<td><a href="?controller=login&&action=delete&&usuario=<?php echo $user->getUser() ?>">Eliminar</a> </td>
						<td><a href="?controller=login&&action=updateshow&&usuario=<?php echo $user->getUser() ?>">Actualizar</a> </td>
					</tr>
					<?php } ?>
				</tbody>

			</thead>
		</table>

	</div>	

</div>