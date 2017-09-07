<?php
class Topico{
	protected $idTopico;
	protected $titulo;
	protected $dataCriacao;
	protected $horaCriacao;
	protected $idUsuario;
	protected $idForum;

	//VARIÁVEIS ASSOCIADAS A OUTRAS CLASSES POST
	protected $qtdPosts, $nomeUsuario, $fotoUsuario, $nomeForum;

	//GETETRS
	public function getIdTopico(){
		return $this->idTopico;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function getDataCriacao(){
		return $this->dataCriacao;
	}

	public function getHoraCriacao(){
		return $this->horaCriacao;
	}

	public function getIdUsuario(){
		return $this->idUsuario;
	}

	public function getNomeUsuario(){
		return $this->nomeUsuario;
	}

	public function getFotoUsuario(){
		return $this->fotoUsuario;
	}

	public function getIdForum(){
		return $this->idForum;
	}

	public function getNomeForum(){
		return $this->nomeForum;
	}

	public function getQtdPosts(){
		return $this->qtdPosts;
	}

	

	//SETTERS
	public function setIdTopico($idTopico){
		$this->idTopico = $idTopico;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function setDataCriacao($dataCriacao){
		$this->dataCriacao = $dataCriacao;
	}

	public function setHoraCriacao($horaCriacao){
		$this->horaCriacao = $horaCriacao;
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function setNomeUsuario($nomeUsuario){
		$this->nomeUsuario = $nomeUsuario;
	}

	public function setFotoUsuario($fotoUsuario){
		$this->fotoUsuario = $fotoUsuario;
	}

	public function setIdForum($idForum){
		$this->idForum = $idForum;
	}

	public function setNomeForum($nomeForum){
		$this->nomeForum = $nomeForum;
	}

		public function setQtdPosts($qtdPosts){
		$this->qtdPosts = $qtdPosts;
	}

}

?>