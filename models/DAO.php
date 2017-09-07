<?php
class DAO {
	protected $conexao;
	function __construct() {
		try{
			$this->conexao = new PDO(
				'mysql:host=localhost:3307;dbname=forum;charset=utf8',
				'root', 'usbw');
			$this->conexao->setAttribute(
				PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// print 'Conectado com sucesso';
		}
		catch (PDOException $e) {
			print 'Falhou em conectar: '.$e->getMessage();
		}
	}
	public function db() {
		return $this->conexao;
	}
}