<?php 

	class Usuarios{
		private $pdo;

		public function conexão($banco,$servidor,$usuario,$senha){
			global $pdo;
			// conexão com banco de dados
			try
			 {
				$pdo = new PDO("mysql:dbname=".$banco.";host=".$servidor,$usuario,$senha);
			} catch (PDOException $e) {
				echo "Erro a conectar-se ao banco de dados".$e;
			}
		}
		public function cadastro($nome,$email,$senha){
			global $pdo;
			// realizando o cadastro do usuario
			$sql = $pdo->prepare("SELECT id_usuarios FROM tb_login WHERE email = :email");
			$sql->bindValue(":email",$email);
			$sql->execute();

			if ($sql->rowCount() > 0){
				return false;
			}
			else
			{
				$sql = $pdo->prepare("INSERT INTO tb_login(nome,email,senha)VALUES(:nome,:email,:senha)");
				$sql->bindValue(":nome",$nome);
				$sql->bindValue(":email",$email);
				$sql->bindValue(":senha",md5($senha));
				$sql->execute();
				return true;
			}
		}
		public function login($email,$senha){
			global $pdo;
			// realizando o login do usuario
			$sql = $pdo->prepare("SELECT id_usuarios FROM tb_login WHERE email= :email AND senha= :senha");
			$sql->bindValue(":email",$email);
			$sql->bindValue(":senha",md5($senha));
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$dados = $sql->fetch();
				session_start();
				$_SESSION['id_usuarios'] = $dados['id_usuarios'];
				return true;
			}else{
				return false;
			}
		}
	}

 ?>