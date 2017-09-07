<?php
class Post{
	protected $idPost;
	protected $texto;
	protected $dataPost;
	protected $horaPost;
	protected $tipo;
	protected $idTopico;
	protected $idUsuario;
	

	//VARIAVEIS ASSOCIADAS A CLASSE USUARIO
	protected $nomeUsuario, $tipoUsuario, $fotoUsuario;

	//GETETRS
	public function getIdPost(){
		return $this->idPost;
	}

	public function getTexto(){
		return $this->texto;
	}

	public function getDataPost(){
		return $this->dataPost;
	}

	public function getHoraPost(){
		return $this->horaPost;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function getIdTopico(){
		return $this->idTopico;
	}

	public function getIdUsuario(){
		return $this->idUsuario;
	}

	

	//SETTERS
	public function setIdPost($idPost){
		$this->idPost = $idPost;
	}

	public function setTexto($texto){
		$this->texto = $texto;
	}

	public function setDataPost($dataPost){
		$this->dataPost = $dataPost;
	}

	public function setHoraPost($horaPost){
		$this->horaPost = $horaPost;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function setIdTopico($idTopico){
		$this->idTopico = $idTopico;
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}



	// GETTERS USUARIO
	public function getNomeUsuario(){
		return $this->nomeUsuario;
	}

	public function getTipoUsuario(){
		return $this->tipoUsuario;
	}

	public function getFotoUsuario(){
		return $this->fotoUsuario;
	}

	// SETTERS USUARI
	public function setNomeUsuario($nomeUsuario){
		$this->nomeUsuario = $nomeUsuario;
	}
	public function setTipoUsuario($tipoUsuario){
		$this->tipoUsuario = $tipoUsuario;
	}
	public function setFotoUsuario($fotoUsuario){
		$this->fotoUsuario = $fotoUsuario;
	}
}

?>