<?
class Seguidor{
	protected $idSeguidor;
	protected $userSeguidor;
	protected $userSeguido;
	protected $dataCriacao;

	//GETETRS
	public function getIdSeguidor(){
		return $this->idSeguidor;
	}

	public function getUserSeguidor(){
		return $this->userSeguidor;
	}

	public function getUserSeguido(){
		return $this->userSeguido;
	}

	public function getDataCriacao(){
		return $this->dataCriacao;
	}

	//SETTERS
	public function setIdSeguidor($idSeguidor){
		$this->idSeguidor = $idSeguidor;
	}

	public function setUserSeguidor($userSeguidor){
		$this->userSeguidor = $userSeguidor;
	}

	public function setUserSeguido($userSeguido){
		$this->userSeguido = $userSeguido;
	}

	public function seDataCriacao($dataCriacao){
		$this->dataCriacao = $dataCriacao;
	}
}
?>