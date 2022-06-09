<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>
</head>
<body>
    <form action="../../interceptor.php?class=User&method=auth" method="post">
        <input type="text" name="username" placeholder="Nome usuario"><br>
        <input type="password" name="password" placeholder="senha usuário"><br>
        <button type="submit">entrar</button>
    </form>
</body>
</html>