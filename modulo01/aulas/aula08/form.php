<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <main>
        <form action="superglobais.php?tipo=aluno&turno=noite" method="post">
            <label for="usu">Usuário</label>
            <input type="text" name="usu" id="usu">
            <label for="sen">Senha</label>
            <input type="password" name="sen" id="sen">
            <input type="submit" value="Entrar">
        </form>
    </main>
</body>
</html>