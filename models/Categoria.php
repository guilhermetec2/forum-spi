<?php
class Categoria{
	protected $idCategoria;
	protected $nomeCategoria;
	protected $descricao;

	//GETETRS
	public function getIdCategoria(){
		return $this->idCategoria;
	}

	public function getNomeCategoria(){
		return $this->nomeCategoria;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	//SETTERS
	public function setIdCategoria($idCategoria){
		$this->idCategoria = $idCategoria;
	}

	public function setNomeCategoria($nomeCategoria){
		$this->nomeCategoria = $nomeCategoria;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
}

?>