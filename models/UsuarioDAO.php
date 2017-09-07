<?php
class UsuarioDAO extends DAO {
	public function insere(Usuario $usuario) {
		$sql = "INSERT INTO usuario
					(nome_usuario, tipo_usuario, matricula, nivel, senha, data_inscricao, foto_perfil, tema_perfil)
				VALUES
					(:nome, :tipo, :matricula, :nivel, :senha, CURDATE(), :foto, :tema)";
		$query = $this->db()->prepare($sql);
		$query->execute(array(
			':nome' => $usuario->getNomeUsuario(),
			':tipo' => $usuario->getTipoUsuario(),
			':matricula' => $usuario->getMatricula(),
			':nivel' => $usuario->getNivel(),
			':senha' => $usuario->getSenha(),
			':foto' => $usuario->getFotoPerfil(),			
			':tema' => $usuario->getTemaPerfil()
		));
		return $this->db()->lastInsertId();
	}

	public function getLista() {
		$sql = "SELECT * FROM usuario
				ORDER BY nome_usuario";
		$query = $this->db()->query($sql);
		$listaUsuarios = array();
		foreach ($query as $dadosUsuario) {
			$usuario = new Usuario();
			$usuario->setIdUsuario($dadosUsuario['id_usuario']);
			$usuario->setNomeUsuario($dadosUsuario['nome_usuario']);
			$usuario->setTipoUsuario($dadosUsuario['tipo_usuario']);
			$usuario->setMatricula($dadosUsuario['matricula']);
			$usuario->setNivel($dadosUsuario['nivel']);
			$usuario->setSenha($dadosUsuario['senha']);
			$usuario->setDataInscricao($dadosUsuario['data_inscricao']);
			$usuario->setFotoPerfil($dadosUsuario['foto_perfil']);
			$usuario->setTemaPerfil($dadosUsuario['tema_perfil']);
			array_push($listaUsuarios, $usuario);
		}
		return $listaUsuarios;
	}   

	public function verificaUsuario($nome) {
		$sql = "SELECT COUNT(*) AS total FROM usuario
				WHERE nome_usuario= :nome";
		$query = $this->db()->prepare($sql);
		$query->execute(array(':nome' => $nome));
		$dados = $query->fetch(PDO::FETCH_ASSOC);
		return $dados['total'];
	}

	public function getUsuario($id) {
		$sql = "SELECT * FROM usuario
				WHERE id_usuario = :id ";
		$query = $this->db()->prepare($sql);
		$query->execute(array(':id' => $id));
		$dadosUsuario = $query->fetch(PDO::FETCH_ASSOC);
		$usuario = new Usuario();
		$usuario->setIdUsuario($dadosUsuario['id_usuario']);
		$usuario->setNomeUsuario($dadosUsuario['nome_usuario']);
		$usuario->setTipoUsuario($dadosUsuario['tipo_usuario']);
		$usuario->setMatricula($dadosUsuario['matricula']);
		$usuario->setNivel($dadosUsuario['nivel']);
		$usuario->setSenha($dadosUsuario['senha']);
		$usuario->setDataInscricao($dadosUsuario['data_inscricao']);
		$usuario->setFotoPerfil($dadosUsuario['foto_perfil']);
		$usuario->setTemaPerfil($dadosUsuario['tema_perfil']);

		return $usuario;
	}

	public function atualizaFoto(Usuario $usuario) {
		$sql = "UPDATE usuario SET				
					foto_perfil = :foto
				WHERE id_usuario = :id";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(
			':foto' => $usuario->getFotoPerfil(),
			':id' => $usuario->getIdUsuario()
		));
	}

	public function atualizaTema(Usuario $usuario) {
		$sql = "UPDATE usuario SET				
					tema_perfil = :tema
				WHERE id_usuario = :id";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(
			':tema' => $usuario->getTemaPerfil(),
			':id' => $usuario->getIdUsuario()
		));
	}

	public function atualiza(Usuario $usuario) {
		$sql = "UPDATE usuario SET
					nome_usuario = :nome,
					tipo_usuario = :tipo,
					matricula = :matricula,
					senha = :senha
				WHERE id_usuario = :id";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(
			':nome' => $usuario->getNomeUsuario(),
			':tipo' => $usuario->getTipoUsuario(),
			':matricula' => $usuario->getMatricula(),
			':senha' => $usuario->getSenha(),
			':id' => $usuario->getIdUsuario()
		));
	}

	public function excluiUsuario($id) {
		$sql = "DELETE FROM usuario
				WHERE id_usuario = :id ";
		$query = $this->db()->prepare($sql);
		return $query->execute(array(':id' => $id));
	}
}