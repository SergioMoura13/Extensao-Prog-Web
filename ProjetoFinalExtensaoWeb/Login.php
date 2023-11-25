<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css"/>
    <title>Login</title>
</head>
<body>

    <div class="telaLogin">
        <h1>Login</h1>

        <form action="testeLogin.php" method="POST">

       
            <input class="input" type="text" name="Apelido" placeholder="Apelido">
            <br>
            <br>
            <input class="input" type="password" name="Senha" placeholder="Senha">
            <br>
            <br>
            <input type="submit" name="submit" class="button" value="Enviar"> 
            <br>
            <br>
            <a id="esqueceuSenha" href="https://localhost/ProjetoFinalExtensaoWeb/Cadastro.php">Cadastra-se</a>
            <a id="esqueceuSenha" href="Esqueceu.html">Esqueceu a senha?</a>
       </form>
    </div>

    
</body>
</html>