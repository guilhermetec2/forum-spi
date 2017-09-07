<?php
class MensagemDAO extends DAO {
	public function insere(Mensagem $mensagem) {
		$sql = "INSERT INTO mensagem
					(texto, data, remetente, destinatario)
				VALUES
					(:texto, :data, :remetente, :destinatario)";
		$query = $this->db()->prepare($sql);
		$query->execute(array(
			':texto' => $mensagem->getTexto(),		
			':data' => $mensagem->getData(),
			':remetente' => $mensagem->getRemetente(),
			':destinatario' => $mensagem->getDestinatario()			
		));
		return $this->db()->lastInsertId();
	}

	public function getLista() {
		$sql = "SELECT * FROM mensagem
				WHERE id_destinatario = :id
				ORDER BY data";
		$query = $this->db()->query($sql);
		$listaMensagens = array();
		foreach ($query as $dadosMensagem) {
			$mensagem = new Mensagem();
			$mensagem->setIdMensagem($dadosMensagem['id_mensagem']);
			$mensagem->setTexto($dadosMensagem['texto']);
			$mensagem->setData($dadosMensagem['data']);
			$mensagem->setRemetente($dadosMensagem['remetente']);
			$mensagem->setDestinatario($dadosMensagem['destinatario']);				
			array_push($listaMensagens, $mensagem);
		}
		return $listaMensagens;
	}   

	public function getMensagem($id) {
		$sql = "SELECT * FROM mensagem
				WHERE destinatario = :id ";
		$query = $this->db()->prepare($sql);
		$query->execute(array(':id' => $id));
		$dadosMensagem = $query->fetch(PDO::FETCH_ASSOC);
		$mensagem = new Mensagem();
		$mensagem->setIdMensagem($dadosMensagem['id_mensagem']);
		$mensagem->setTexto($dadosMensagem['texto']);
		$mensagem->setData($dadosMensagem['data']);
		$mensagem->setRemetente($dadosMensagem['remetente']);
		$mensagem->setDestinatario($dadosMensagem['destinatario']);				
		return $mensagem;
	}

	public function atualiza(Mensagem $mensagem) {
		$sql = "UPDATE mensagem SET
					texto = :texto,
					data = :data,
					remetente = :remetente,
					destinatario = :destinatario
				WHERE id_mensagem = :id";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(
			':texto' => $mensagem->getTexto(),
			':data' => $mensagem->getData(),
			':remetente' => $mensagem->getRemetente(),
			':destinatario' => $mensagem->getDestinatario(),	
			':id' => $mensagem->getIdmensagem()
		));
	}

	public function excluiMensagem($id) {
		$sql = "DELETE FROM mensagem
				WHERE id_mensagem = :id ";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(':id' => $id));
	}
}