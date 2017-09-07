<?php
class PostDAO extends DAO {
	public function insere(Post $post) {
		$sql = "INSERT INTO post
					(texto, data_postagem, hora_postagem, tipo_postagem, id_topico, id_usuario)
				VALUES
					(:texto, CURDATE(), CURRENT_TIME, :tipo, :topico, :usuario)";
		$query = $this->db()->prepare($sql);
		$query->execute(array(
			':texto' => $post->getTexto(),
			':tipo' => $post->getTipo(),		
			':topico' => $post->getIdTopico(),
			':usuario' => $post->getIdUsuario()
		));
		return $this->db()->lastInsertId();
	}

	public function getLista($idTopico) {
		$sql = "SELECT post.texto, post.tipo_postagem, post.data_postagem, post.hora_postagem,
					   usuario.nome_usuario, usuario.tipo_usuario, usuario.foto_perfil 
				FROM post
				INNER JOIN usuario ON usuario.id_usuario = post.id_usuario
				WHERE post.id_topico = $idTopico
				ORDER BY data_postagem ASC, hora_postagem ASC";
		$query = $this->db()->query($sql);
		$listaPosts = array();
		foreach ($query as $dadosPost) {
			$post = new Post();
			$usuario = new Usuario();
			$post->setTexto($dadosPost['texto']);
			$post->setDataPost($dadosPost['data_postagem']);
			$post->setHoraPost($dadosPost['hora_postagem']);
			$post->setTipo($dadosPost['tipo_postagem']);
			$post->setNomeUsuario($dadosPost['nome_usuario']);
			$post->setTipoUsuario($dadosPost['tipo_usuario']);
			$post->setFotoUsuario($dadosPost['foto_perfil']);			
			array_push($listaPosts, $post);
		}
		return $listaPosts;
	}   

	public function getPost($id) {
		$sql = "SELECT * FROM post
				WHERE id_post = :id ";
		$query = $this->db()->prepare($sql);
		$query->execute(array(':id' => $id));
		$dadosPost = $query->fetch(PDO::FETCH_ASSOC);
		$post = new Post();
		$post->setIdPost($dadosPost['id_post']);
		$post->setTexto($dadosPost['texto']);
		$post->setDataPost($dadosPost['data_postagem']);
		$post->setHoraPost($dadosPost['hora_postagem']);
		$post->setTipo($dadosPost['tipo']);
		$post->setIdTopico($dadosPost['id_topico']);
		$post->setIdUsuario($dadosPost['id_usuario']);		
		return $post;
	}


	public function atualiza(Post $post) {
		$sql = "UPDATE post SET
					texto = :texto,
					data_postagem = :data,
					hora_postagem = :hora,
					tipo = :tipo,
					id_topico = :topico,
					id_usuario = :usuario
				WHERE id_post = :id";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(
			':texto' => $post->getTexto(),
			':data' => $post->getDataPost(),
			':hora' => $post->getHoraPost(),
			':tipo' => $post->getTipo(),
			':topico' => $post->getIdTopico(),
			':usuario' => $post->getIdUsuario(),									
			':id' => $post->getIdPost()
		));
	}

	public function excluiPost($id) {
		$sql = "DELETE FROM post
				WHERE id_post = :id ";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(':id' => $id));
	}
}