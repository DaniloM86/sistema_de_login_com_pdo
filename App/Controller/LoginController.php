<?php 

	session_start();
	require_once('App/Model/Usuarios.php');
	$usuarios = new Usuarios;
	
	if (isset($_POST['email'])) {
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

	if (!empty($_POST['email']) && !empty($_POST['senha'])) {
			$usuarios->conexão("login","localhost","root","");
			if ($usuarios->login($email,$senha)) {
				header('location:area_restrita');
			}else{
				$_SESSION['msg'] = "<p style='color:red'>E-mail Ou Senha Inválido</p>";
				header('location:login');
				exit();
			}
		}else{
			$_SESSION['msg'] = "<p style='color:red'>Preeencha Todos Os Campos</p>";
			header('location:login');
			exit();
		}	

	}

 ?>