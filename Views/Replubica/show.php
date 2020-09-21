

<div class="container">
	<h2>Lista de Replubicas</h2>
	<form class="form-inline" action="?controller=replubica&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
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
					<th>Id</th>
					<th>Nome</th>
					<th>Endereço</th>
					<th>Accion</th>
				</tr>
				<tbody>
					<?php foreach ($listaReplubicas as $replubica) {?>					
					<tr>
						<td> <a href="?controller=replubica&&action=updateshow&&idReplubica=<?php  echo $replubica->getId()?>"> <?php echo $replubica->getId(); ?></a> </td>
						<td><?php echo $replubica->getNome(); ?></td>
						<td><?php echo $replubica->getEndereco(); ?></td>
						<td><a href="?controller=replubica&&action=delete&&id=<?php echo $replubica->getId() ?>">Eliminar</a> </td>
					</tr>
					<?php } ?>
				</tbody>

			</thead>
		</table>

	</div>	

</div>