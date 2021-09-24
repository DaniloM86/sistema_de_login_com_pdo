<?php

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <div>
            <h2>login</h2>
            <div>

            <?php
        
                 if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }

            ?>
            </div>

            <form method="POST" action="LoginController"> 
                <input type="email" name="email" placeholder="E-mail"><br><br>
                <input type="password" name="senha" placeholder="Senha"><br><br>
                <input type="submit" value="Login"><br><br>
                <a href="cadastro">Ainda não tem cadastro? <strong>Cadastrar-se<strong></a>
            </form>
        </div>
    </div>
</body>
</html>