<?php
class Mensagem{
	protected $idMensagem;
	protected $texto;
	protected $data;
	protected $remetente;
	protected $destinatario;

	//GETETRS
	public function getIdMensagem(){
		return $this->idMensagem;
	}

	public function getTexto(){
		return $this->texto;
	}

	public function getData(){
		return $this->data;
	}

	public function getRemetente(){
		return $this->remetente;
	}

	public function getDestinatario(){
		return $this->destinatario;
	}

	//SETTERS
	public function setIdMensagem($idMensagem){
		$this->idMensagem = $idMensagem;
	}

	public function setTexto($texto){
		$this->texto = $texto;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function setRemetente($remetente){
		$this->remetente = $remetente;
	}

	public function setDestinatario($destinatario){
		$this->destinatario = $destinatario;
	}
}

?>