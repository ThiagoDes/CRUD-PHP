<?php 
/**
* 
*/
class Replubica
{
	private $id;
	private $nome;
	private $endereco;
	
	function __construct($id, $nome ,$endereco)
	{
		$this->setId($id);
		$this->setNome($nome);
		$this->setEndereco($endereco);	
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public static function save($replubica){
		$db=Db::getConnect();
		
		$insert=$db->prepare('INSERT INTO replubica (nome, endereco) VALUES (:nome,:endereco)');
		$insert->bindValue('nome',$replubica->getNome());
		$insert->bindValue('endereco',$replubica->getEndereco());
		$insert->execute();
	}

	public static function all(){
		$db=Db::getConnect();
		$listaReplubicas=[];

		$select=$db->query('SELECT * FROM replubica order by IdRep');

		foreach($select->fetchAll() as $replubica){
			$listaReplubicas[]=new Replubica($replubica['IdRep'],$replubica['nome'],$replubica['endereco']);
		}
		return $listaReplubicas;
	}

	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM replubica WHERE IdRep=:id');
		$select->bindValue('id',$id);
		$select->execute();

		$replubicaDb=$select->fetch();


		$replubica = new Replubica ($replubicaDb['IdRep'],$replubicaDb['nome'], $replubicaDb['endereco']);
		return $replubica;

	}

	public static function update($replubica){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE replubica SET nome=:nome, endereco=:endereco WHERE IdRep=:id');
		$update->bindValue('nome', $replubica->getNome());
		$update->bindValue('endereco',$replubica->getEndereco());
		$update->bindValue('id',$replubica->getId());
		$update->execute();
	}

	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM replubica WHERE IdRep=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
}

?>