<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $Nome = $_POST['Nome'];
        $Sobrenome = $_POST['Sobrenome'];
        $Apelido = $_POST['Apelido'];
        $CPF = $_POST['cpf'];
        $Email = $_POST['email'];
        $Sexo = $_POST['genero'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios (Nome, Sobrenome, Apelido, CPF, Email, Sexo) 
        VALUES('$Nome', '$Sobrenome', '$Apelido', '$CPF', '$Email', '$Sexo') ");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCadastro.css"/>
    <title>Cadastro</title>
</head>
<body>

    <div class="telaCadastro">
        <form action="Cadastro.php" method="POST">
            <fieldset>  
                    <h1>Cadastro</h1>
                    <input class="input" name="Nome" type="text" placeholder="Nome" required>
                    <label for="Nome"></label>
                    <input class="input" name="Sobrenome" type="text" placeholder="Sobrenome" required>
                    <label for="Sobrenome"></label>
                    <br>
                    <br>
                    <input class="input" name="Apelido" type="text" placeholder="Apelido" required>
                    <label for="Apelido"></label>
                    <input class="input" name="cpf" type="number" placeholder="CPF" required>
                    <label for="cpf"></label>
                    <br>
                    <br>
                    <input class="input" name="email" type="email"  placeholder="Email" required>
                    <label for="email"></label>
                    <input class="input" type="password" name="senha" placeholder="Senha" required>
                    <label for="senha"></label>          
                    <br>
                    <br>
                    <input class="input" type="radio" name="genero" value="masculino" required> Masculino
                    <label for="masculino"></label>
                    <input class="input" type="radio" name="genero" value="feminino" required> Feminino
                    <label for="feminino"></label>
                    <input class="input" type="radio" name="genero" value="outro" required> Outro
                    <label for="outro"></label>
                    <br>
                    <br>
                    <input type="submit" name="submit" class="button">
                    <br>
                    <br>
            </fieldset>
        </form>
    </div>

    
</body>
</html>