<?php
class CategoriaDAO extends DAO {
	public function insere(Categoria $categoria) {
		$sql = "INSERT INTO categoria
					(nome_categoria, descricao)
				VALUES
					(:nome, :descricao)";
		$query = $this->db()->prepare($sql);
		$query->execute(array(
			':nome' => $categoria->getNomeCategoria(),		
			':descricao' => $categoria->getDescricao()
		));
		return $this->db()->lastInsertId();
	}

	public function getLista() {
		$sql = "SELECT * FROM categoria
				ORDER BY nome_categoria";
		$query = $this->db()->query($sql);
		$listaCategorias = array();
		foreach ($query as $dadosCategoria) {
			$categoria = new Categoria();
			$categoria->setIdCategoria($dadosCategoria['id_categoria']);
			$categoria->setNomeCategoria($dadosCategoria['nome_categoria']);
			$categoria->setDescricao($dadosCategoria['descricao']);
			array_push($listaCategorias, $categoria);
		}
		return $listaCategorias;
	}   

	public function getCategoria($id) {
		$sql = "SELECT * FROM categoria
				WHERE id_categoria = :id ";
		$query = $this->db()->prepare($sql);
		$query->execute(array(':id' => $id));
		$dadosCategoria = $query->fetch(PDO::FETCH_ASSOC);
		$categoria = new Categoria();
		$categoria->setIdCategoria($dadosCategoria['id_categoria']);
		$categoria->setNomeCategoria($dadosCategoria['nome_categoria']);
		$categoria->setDescricao($dadosCategoria['descricao']);
		return $categoria;
	}

	public function atualiza(Categoria $categoria) {
		$sql = "UPDATE categoria SET
					nome_categoria = :nome,
					descricao = :descricao
				WHERE id_categoria = :id";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(
			':nome' => $categoria->getNomeCategoria(),
			':descricao' => $categoria->getDescricao(),
			':id' => $categoria->getIdCategoria()
		));
	}

	public function excluiCategoria($id) {
		$sql = "DELETE FROM categoria
				WHERE id_categoria = :id ";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(':id' => $id));
	}
}