<?php 
/**
* 
*/
class ReplubicaController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('Views/Replubica/bemvindo.php');
	}

	function register(){
		require_once('Views/Replubica/cadastra.php');
	}

	function save(){

		if($replubica= new Replubica(NULL, $_POST['nome'],$_POST['endereco'])){

			?>
			<div class="alert alert-success">
				<strong>Parabéns!</strong> Dado cadastrado com sucesso. 
			</div>
			<?php

			Replubica::save($replubica);
			$this->show();
			
		}
		else {
			?>
			<div class="alert alert-warning">
				<strong>Erro no!</strong> Cadastrado.
			</div>
			<?php
			$this->show();
		}
		
	}

	function show(){
		$listaReplubicas=Replubica::all();

		require_once('Views/Replubica/show.php');
	}

	function updateshow(){
		$id=$_GET['idReplubica'];
		$replubica=Replubica::searchById($id);
		require_once('Views/Replubica/atualiza.php');
	}

	function update(){
		if($replubica = new Replubica($_POST['id'],$_POST['nome'],$_POST['endereco'])){

			?>
			<div class="alert alert-success">
				<strong>Parabéns!</strong> Dado atualizados com sucesso. 
			</div>
			<?php
			Replubica::update($replubica);
			$this->show();
		} else {
				?>
				<div class="alert alert-warning">
					<strong>Erro ao!</strong> Atualizar
				</div>
				<?php
				$this->show();
			
		}
		
	}
	function delete(){
		$id=$_GET['id'];
		Replubica::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$replubica=Replubica::searchById($id);
			$listaReplubicas[]=$replubica;
			require_once('Views/Replubica/show.php');
		} else {
			$listaReplubicas=Replubica::all();

			require_once('Views/Replubica/show.php');
		}
		
		
	}

	function error(){
		require_once('Views/Replubica/error.php');
	}

}

?>