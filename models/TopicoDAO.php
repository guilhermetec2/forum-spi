<?php
class TopicoDAO extends DAO {
	public function insere(Topico $topico) {
		$sql = "INSERT INTO topico
					(titulo, data_criacao, hora_criacao, id_usuario, id_forum)
				VALUES
					(:titulo, CURDATE(), CURRENT_TIME, :usuario, :forum)";
		$query = $this->db()->prepare($sql);
		$query->execute(array(
			':titulo' => $topico->getTitulo(),		
			':usuario' => $topico->getIdUsuario(),
			':forum' => $topico->getIdForum()

		));
		return $this->db()->lastInsertId();
	}

	public function getLista($idForum) {
		$sql =  "SELECT topico.id_topico, topico.titulo, topico.data_criacao, topico.hora_criacao, topico.id_usuario, topico.id_forum, usuario.nome_usuario, usuario.foto_perfil
				FROM  topico 
				INNER JOIN usuario ON usuario.id_usuario = topico.id_usuario
				WHERE topico.id_forum = $idForum
				ORDER BY data_criacao DESC , hora_criacao DESC";
		$query = $this->db()->query($sql);
		$listaTopicos = array();
		foreach ($query as $dadosTopico) {
			$topico = new Topico();
			$topico->setIdTopico($dadosTopico['id_topico']);
			$topico->setTitulo($dadosTopico['titulo']);
			$topico->setDataCriacao($dadosTopico['data_criacao']);
			$topico->setHoraCriacao($dadosTopico['hora_criacao']);
			$topico->setIdUsuario($dadosTopico['id_usuario']);
			$topico->setIdForum($dadosTopico['id_forum']);
			$topico->setNomeUsuario($dadosTopico['nome_usuario']);
			$topico->setFotoUsuario($dadosTopico['foto_perfil']);
			$topico->setQtdPosts($this->getQtdPost($dadosTopico['id_topico']));
			array_push($listaTopicos, $topico);
		}
		return $listaTopicos;
	}   

	public function getTopico($id) {
		$sql = "SELECT * FROM topico
				WHERE id_topico = :id ";
		$query = $this->db()->prepare($sql);
		$query->execute(array(':id' => $id));
		$dadosTopico = $query->fetch(PDO::FETCH_ASSOC);
		$topico = new Topico();
		$topico->setIdTopico($dadosTopico['id_topico']);
		$topico->setTitulo($dadosTopico['titulo']);
		$topico->setDataCriacao($dadosTopico['data_criacao']);
		$topico->setHoraCriacao($dadosTopico['hora_criacao']);
		$topico->setIdUsuario($dadosTopico['id_usuario']);
		$topico->setIdForum($dadosTopico['id_forum']);
		return $topico;
	}

	public function getMeusTopicos($idUsuario) {
		$sql =  "SELECT topico.id_topico, topico.titulo, topico.data_criacao, topico.hora_criacao, topico.id_usuario, topico.id_forum, forum.nome_forum
				FROM  topico 
				INNER JOIN forum ON forum.id_forum = topico.id_forum
				WHERE topico.id_usuario = $idUsuario
				ORDER BY data_criacao DESC, hora_criacao DESC";
		$query = $this->db()->query($sql);
		$listaTopicos = array();
		foreach ($query as $dadosTopico) {
			$topico = new Topico();
			$topico->setIdTopico($dadosTopico['id_topico']);
			$topico->setTitulo($dadosTopico['titulo']);
			$topico->setDataCriacao($dadosTopico['data_criacao']);
			$topico->setHoraCriacao($dadosTopico['hora_criacao']);
			$topico->setIdUsuario($dadosTopico['id_usuario']);
			$topico->setIdForum($dadosTopico['id_forum']);
			$topico->setNomeForum($dadosTopico['nome_forum']);
			$topico->setQtdPosts($this->getQtdPost($dadosTopico['id_topico']));
			array_push($listaTopicos, $topico);
		}
		return $listaTopicos;
	} 

	public function getQtdPost($idTopico) {
		$sql = "SELECT Count(id_post) AS NumeroPosts FROM post
				WHERE id_topico = :id ";
		$query = $this->db()->prepare($sql);
		$query->execute(array(':id' => $idTopico));
		$dados = $query->fetch(PDO::FETCH_ASSOC);
		// $topico = new Topico();
		// $topico->setQtdPosts($dados['NumeroPosts']);		
		return $dados['NumeroPosts'];
	}

	public function getUltimosTopicos() {
		$sql =  "SELECT topico.id_topico, topico.titulo, topico.data_criacao, topico.hora_criacao, usuario.nome_usuario, usuario.foto_perfil, forum.nome_forum
			FROM  ((topico
			INNER JOIN usuario ON topico.id_usuario = usuario.id_usuario)
			INNER JOIN forum ON topico.id_forum = forum.id_forum)
			ORDER BY id_topico DESC 
			LIMIT 3";
		$query = $this->db()->query($sql);
		$listaTopicos = array();
		foreach ($query as $dadosTopico) {
			$topico = new Topico();
			$topico->setIdTopico($dadosTopico['id_topico']);
			$topico->setTitulo($dadosTopico['titulo']);
			$topico->setDataCriacao($dadosTopico['data_criacao']);
			$topico->setHoraCriacao($dadosTopico['hora_criacao']);
			$topico->setNomeUsuario($dadosTopico['nome_usuario']);
			$topico->setFotoUsuario($dadosTopico['foto_perfil']);
			$topico->setNomeForum($dadosTopico['nome_forum']);
			array_push($listaTopicos, $topico);
		}
		return $listaTopicos;
	}

	public function atualiza(Topico $topico) {
		$sql = "UPDATE topico SET
					titulo = :titulo,
					data_criacao = :data,
					hora_criacao = :hora,
					id_usuario = :usuario,
					id_forum = :forum
				WHERE id_topico = :id";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(
			':titulo' => $topico->getTitulo(),
			':data' => $topico->getDataCriacao(),
			':hora' => $topico->getHoraCriacao(),
			':usuario' => $topico->getIdUsuario(),
			':forum' => $topico->getIdForum(),			
			':id' => $topico->getIdTopico()
		));
	}

	public function excluiTopico($id) {
		$sql = "DELETE FROM topico
				WHERE id_topico = :id ";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(':id' => $id));
	}
}