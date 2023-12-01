<?php
    include_once('config.php');
  //  $idcadastro_produtos = $_GET['id'];
  
   if(!empty($_GET['section']))
    {
        $id = $_GET['section'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id= $id";
       
        $result = $conexao->query($sqlSelect);
      
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                    $Nome = $user_data['Nome'];
                    $Sobrenome = $user_data['Sobrenome'];
                    $Apelido = $user_data['Apelido'];
                    $CPF = $user_data['CPF'];
                    $Email = $user_data['Email'];
                    $Sexo = $user_data['Sexo'];
            }
        }
        else
        {
           // header('Location: sistema.php');
        }
    }
    else
    {
       // header('Location: sistema.php');
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
                    <input class="input" name="Nome" type="text" placeholder="Nome" value="<?php echo $Nome ?>" required>
                    <label for="Nome"></label>
                    <input class="input" name="Sobrenome" type="text" placeholder="Sobrenome" value="<?php echo $Sobrenome ?>" required>
                    <label for="Sobrenome"></label>
                    <br>
                    <br>
                    <input class="input" name="Apelido" type="text" placeholder="Apelido" value="<?php echo $Apelido ?>" required>
                    <label for="Apelido"></label>
                    <input class="input" name="cpf" type="number" placeholder="CPF" value="<?php echo $CPF ?>" required>
                    <label for="cpf"></label>
                    <br>
                    <br>
                    <input class="input" name="email" type="email"  placeholder="Email" value="<?php echo $Email ?>" required>
                    <label for="email"></label>
                    <input class="input" type="password" name="senha" placeholder="Senha" value="<?php echo $Senha ?>" required>
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