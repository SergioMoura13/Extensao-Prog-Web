<?php
    include_once('config.php');
  //  $idcadastro_produtos = $_GET['id'];
  
   if(!empty($_GET['id']))
    {
        $idcadastro_produtos = $_GET['id'];
        $sqlSelect = "SELECT * FROM cadastro_produtos WHERE idcadastro_produtos= $idcadastro_produtos";
       
        $result = $conexao->query($sqlSelect);
      
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                    $nome_produto = $user_data['nome_produto'];
                    $codigo = $user_data['codigo'];
                    $valor = $user_data['valor'];
                    $descricao = $user_data['descricao'];
                    $estoque = $user_data['estoque'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="editarProduto.css"/>
    <title>Cadastro de Usuario</title>
</head>
<body>
    <div id="video-container">
    <div class="background-image">

        <header>
            <div class="navbar">
                <div class="logo"><a href="#">Cadastro Produtos</a></div>
                <ul class="links">
                    <li><a href="index.html">Home</a></li>
                <li><a href="Sobre.html">About</a></li>
                <li><a href="atualizarCadastro.php">Atualizar Cadastro</a></li>
                <li><a href="Produtos.php">Contact</a></li>
                </ul>

              
                <a href="#" class="action_btn">Sair</a>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
    
                <div class="dropdown_menu">
                    <li><a href="index.html">Home</a></li>
                <li><a href="Sobre.html">About</a></li>
                <li><a href="Servicos.html">Services</a></li>
                <li><a href="Contato.html">Contact</a></li>
                    <li><a href="#" class="action_btn">Sair</a></li>
                </div>
    
            </div>
        </header>
    
        <main>
            <div class="telaCadastro">
                <form action="salvarProduto.php" method="POST">
                      
                            <h1>Editar Produtos</h1>
                            <input class="input" name="nome_produto" type="text" placeholder="Nome do Produto" value="<?php echo $nome_produto ?>" required>
                            <label for="NomeProduto"></label>
                            <input class="input" name="Codigo" type="text" placeholder="Codigo do Produto" value="<?php echo $codigo ?>"  required>
                            <label for="Codigo"></label>
                            <br>
                            <br>
                            <input class="input" name="valor" type="text" placeholder="Valor" value="<?php echo $valor ?>" required>
                            <label for="valor"></label>
                            <input class="input" name="descricao" type="text"  placeholder="Descricao" value="<?php echo $descricao ?>"  required>
                            <label for="Descricao"></label>          
                            <br>
                            <br>   
                            <input class="input" name="estoque" type="text" placeholder="Quantidade em Estoque" value="<?php echo $estoque ?>"  required>
                            <label for="Estoque"></label>                         
                            <br>
                            <br>
                            <input type="hidden" name="idcadastro_produtos" value="<?php echo $idcadastro_produtos ?>"> 
                            <input type="submit" name="update" class="button">
                            <br>
                            <br>
                            <input type="submit" name="submit" class="button" value="Listar Produtos">
                    
                </form>
            </div>
        </main>
    
        <script>
            const toggleBtn = document.querySelector('.toggle_btn')
            const toggleBtnIcon = document.querySelector('.toggle_btn i')
            const dropDownMenu = document.querySelector('.dropdown_menu')
    
            toggleBtn.onclick = function (){
                dropDownMenu.classList.toggle('open')
                const isOpen = dropDownMenu.classList.contains('open')
    
                toggleBtnIcon.classList = isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'
            }
    
        </script>
    </div>
    
    
</body>
</html>