<?php

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login pdo</title>
</head>
<body>
<div>
    <div>
    <h2>cadastro</h2>
    <div>

        <?php
    
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        ?>

     </div>   
        <form method="POST" action="CadastroController">
             <input type="text" name="nome" placeholder="Nome"><br><br>
             <input type="email" name="email" placeholder="E-mail"><br><br>
             <input type="password" name="senha" placeholder="Senha"><br><br>
             <input type="password" name="confSenha" placeholder="confirme sua senha"><br><br>
             <input type="submit" value="cadastrar"><br><br>
             <a href="login">retornar a tela de login</a>
        </form>
    </div>
</div>
</body>
</html>

