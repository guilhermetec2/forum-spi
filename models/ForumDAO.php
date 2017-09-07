<?php
class ForumDAO extends DAO {
	public function insere(Forum $forum) {
		$sql = "INSERT INTO forum
					(nome_forum, descricao_forum, id_categoria)
				VALUES
					(:nome, :descricao, :categoria)";
		$query = $this->db()->prepare($sql);
		$query->execute(array(
			':nome' => $forum->getNomeforum(),		
			':descricao' => $forum->getDescricao(),
			':categoria' => $forum->getIdCategoria()
		));
		return $this->db()->lastInsertId();
	}

	public function getLista($idCategoria) {
		$sql = "SELECT * FROM forum
				WHERE id_categoria = $idCategoria;
				ORDER BY id_categoria";
		$query = $this->db()->query($sql);
		$listaForums = array();
		foreach ($query as $dadosForum) {
			$forum = new Forum();
			$forum->setIdForum($dadosForum['id_forum']);
			$forum->setNomeForum($dadosForum['nome_forum']);
			$forum->setDescricao($dadosForum['descricao_forum']);
			$forum->setIdCategoria($dadosForum['id_categoria']);
			array_push($listaForums, $forum);
		}
		return $listaForums;
	}   

	public function getForum($id) {
		$sql = "SELECT * FROM forum
				WHERE id_forum = :id ";
		$query = $this->db()->prepare($sql);
		$query->execute(array(':id' => $id));
		$dadosForum = $query->fetch(PDO::FETCH_ASSOC);
		$forum = new Forum();
		$forum->setIdForum($dadosForum['id_forum']);
		$forum->setNomeForum($dadosForum['nome_forum']);
		$forum->setDescricao($dadosForum['descricao_forum']);
		$forum->setIdCategoria($dadosForum['id_categoria']);
		return $forum;
	}

	public function atualiza(Forum $forum) {
		$sql = "UPDATE forum SET
					nome_forum = :nome,
					descricao_forum = :descricao,
					id_categoria = :categoria
				WHERE id_forum = :id";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(
			':nome' => $forum->getNomeForum(),
			':descricao' => $forum->getDescricao(),
			':categoria' => $forum->getIdCategoria(),
			':id' => $forum->getIdForum()
		));
	}

	public function excluiForum($id) {
		$sql = "DELETE FROM forum
				WHERE id_forum = :id ";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(':id' => $id));
	}
}