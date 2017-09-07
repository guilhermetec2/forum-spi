<?php
class SeguidorDAO extends DAO {
	public function insere(Seguidor $seguidor) {
		$sql = "INSERT INTO seguidor
					(user_seguidor, user_seguido, data_criacao)
				VALUES
					(:seguidor, :seguido, :data)";
		$query = $this->db()->prepare($sql);
		$query->execute(array(
			':seguidor' => $seguidor->getUserSeguidor(),		
			':seguido' => $seguidor->getUserseguido(),
			':data' => $seguidor->getDataCriacao()
		));
		return $this->db()->lastInsertId();
	}

	public function getLista() {
		$sql = "SELECT * FROM seguidor
				ORDER BY data_criacao";
		$query = $this->db()->query($sql);
		$listaSeguidores = array();
		foreach ($query as $dadosSeguidor) {
			$seguidor = new Seguidor();
			$seguidor->setIdSeguidor($dadosSeguidor['id_seguidor']);
			$seguidor->setUserSeguidor($dadosSeguidor['user_seguidor']);
			$seguidor->setUserSeguido($dadosSeguidor['user_seguido']);
			$seguidor->setDataCriacao($dadosSeguidor['data_criacao']);		
			array_push($listaSeguidores, $seguidor);
		}
		return $listaSeguidores;
	}   

	public function getSeguidor($id) {
		$sql = "SELECT * FROM seguidor
				WHERE id_seguidor = :id ";
		$query = $this->db()->prepare($sql);
		$query->execute(array(':id' => $id));
		$dadosSeguidor = $query->fetch(PDO::FETCH_ASSOC);
		$seguidor = new Seguidor();
		$seguidor->setIdSeguidor($dadosSeguidor['id_seguidor']);
		$seguidor->setUserSeguidor($dadosSeguidor['user_seguidor']);
		$seguidor->setUserSeguido($dadosSeguidor['user_seguido']);
		$seguidor->setDataCriacao($dadosSeguidor['data_criacao']);		
		return $seguidor;
	}

	public function atualiza(Seguidor $seguidor) {
		$sql = "UPDATE seguidor SET
					user_seguidor = :seguidor,
					user_seguido = :seguido,
					data_criacao = :data
				WHERE id_seguidor = :id";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(
			':seguidor' => $seguidor->getTexto(),
			':seguido' => $seguidor->getDataseguidor(),
			':data' => $seguidor->getTipo(),									
			':id' => $seguidor->getIdseguidor()
		));
	}

	public function excluiSeguidor($id) {
		$sql = "DELETE FROM seguidor
				WHERE id_seguidor = :id ";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(':id' => $id));
	}
}