<?php
class Forum{
	protected $idForum;
	protected $nomeForum;
	protected $descricao;
	protected $idCategoria;

	//GETETRS
	public function getIdForum(){
		return $this->idForum;
	}

	public function getNomeForum(){
		return $this->nomeForum;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function getIdCategoria(){
		return $this->idCategoria;
	}

	//SETTERS
	public function setIdForum($idForum){
		$this->idForum = $idForum;
	}

	public function setNomeForum($nomeForum){
		$this->nomeForum = $nomeForum;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function setIdCategoria($idCategoria){
		$this->idCategoria = $idCategoria;
	}
}

?>