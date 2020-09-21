<div class="container">
	<h2>Atualizar Replubica</h2>
	<form action="?controller=replubica&&action=update" method="POST">
		<input type="hidden" name="id" value="<?php echo $replubica->getId() ?>" >
		<div class="form-group">
			<label for="text">Nome:</label>
			<input required type="text" name="nome" id="nome" class="form-control" value="<?php echo $replubica->getNome() ?>">
		</div>
		<div class="form-group">
			<label for="text">Endereço:</label>
			<input required type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $replubica->getEndereco(); ?>">
		</div>
		
		<button type="submit" class="btn btn-primary">Atualizar</button>

	</form>
</div>