<?php 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PROVA PWEB</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <form action="../interceptor.php?class=User&method=post" method="post">

        <label for="username">
            usuário:
            <input type="text" name="username" id="username">
        </label>
        <label for="user_password">
           Senha:
            <input type="password" name="password" id="user_password">
        </label>
        <input type="submit" value="Pronto"/>
    </form>
</body>
</html>