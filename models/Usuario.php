<?php
class Usuario {
	protected $idUsuario;
	protected $nomeUsuario;
	protected $tipoUsuario;
	protected $matricula;
	protected $nivel;
	protected $senha;
	protected $dataInscricao;
	protected $fotoPerfil;
	protected $temaPerfil;

	//GETTERS
	public function getIdUsuario() {
		return $this->idUsuario;
	}
	public function getNomeUsuario() {
		return $this->nomeUsuario;
	}
	public function getTipoUsuario() {
		return $this->tipoUsuario;
	}
	public function getMatricula() {
		return $this->matricula;
	}
	public function getNivel() {
		return $this->nivel;
	}
	public function getSenha() {
		return $this->senha;
	}
	public function getDataInscricao() {
		return $this->dataInscricao;
	}
	public function getFotoPerfil() {
		return $this->fotoPerfil;
	}
	public function getTemaPerfil() {
		return $this->temaPerfil;
	}



	//SETTERS
	public function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
	}
	public function setNomeUsuario($nomeUsuario) {
		$this->nomeUsuario = $nomeUsuario;
	}
	public function setTipoUsuario($tipoUsuario) {
		$this->tipoUsuario = $tipoUsuario;
	}
	public function setMatricula($matricula) {
		$this->matricula = $matricula;
	}
	public function setNivel($nivel) {
		$this->nivel = $nivel;
	}
	public function setSenha($senha) {
		$this->senha = $senha;
	}
	public function setDatainscricao($dataInscricao) {
		$this->dataInscricao = $dataInscricao;
	}
	public function setFotoPerfil($fotoPerfil) {
		$this->fotoPerfil = $fotoPerfil;
	}
	public function setTemaPerfil($temaPerfil) {
		$this->temaPerfil = $temaPerfil;
	}


}
?>