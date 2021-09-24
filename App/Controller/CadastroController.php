<?php 
	session_start();
	 require_once('App/Model/Usuarios.php');
	$usuarios = new Usuarios;

	if (isset($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);
		$confSenha = addslashes($_POST['confSenha']);

		if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['confSenha'])) {
			$usuarios->conexão("login","localhost","root","");
			if ($senha == $confSenha) {
				if ($usuarios->cadastro($nome,$email,$senha)) {
					
					$_SESSION['msg'] = "<p style='color:green'>Usuario Cadastrado Com Sucesso</p>";
					header('location:cadastro');
					exit();
				}else
				{
					$_SESSION['msg'] = "<p style='color:red'>Usuario Já Cadastrado</p>";
					header('location:cadastro');
					exit();
				}
			}else
			{
				$_SESSION['msg'] = "<p style='color:red'>Senha e Confirmar Senha Não Correspodem</p>";
				header('location:cadastro');
				exit();
			}
		}else
		{
			$_SESSION['msg'] = "<p style='color:red'>Preencha todos Os Campos</p>";
			header('location:cadastro');
			exit();
		}
	}

 ?>