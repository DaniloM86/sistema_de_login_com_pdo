<?php
session_start();
	if (!isset($_SESSION['id_usuarios'])) {
		header('location:login');
		exit();
    }  
   ?> 
 <h2>Seja bem vindo</h2>
 <h4><a href="FinalSectionController">Sair</a></h4>