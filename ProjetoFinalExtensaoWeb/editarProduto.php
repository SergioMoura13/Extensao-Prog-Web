<?php
    include_once('config.php');

    if(!empty($_GET['idcadastro_produtos']))
    {
        $idcadastro_produtos = $_GET['idcadastro_produtos'];
        $sqlSelect = "SELECT * FROM cadastro_produtos WHERE idcadastro_produtos=$idcadastro_produtos";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                    $nome_produto = $user_data['NomeProduto'];
                    $codigo = $user_data['Codigo'];
                    $valor = $user_data['Valor'];
                    $descricao = $user_data['Descricao'];
                    $estoque = $user_data['Estoque'];
            }
        }
        else
        {
          //  header('Location: sistema.php');
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
                      
                            <h1>Produtos</h1>
                            <input class="input" name="NomeProduto" type="text" placeholder="Nome do Produto" value="<?php echo $nome_produto ?>" required>
                            <label for="NomeProduto"></label>
                            <input class="input" name="Codigo" type="text" placeholder="Codigo do Produto"   required>
                            <label for="Codigo"></label>
                            <br>
                            <br>
                            <input class="input" name="Valor" type="text" placeholder="Valor" required>
                            <label for="valor"></label>
                            <input class="input" name="Descricao" type="text"  placeholder="Descricao"  required>
                            <label for="Descricao"></label>          
                            <br>
                            <br>   
                            <input class="input" name="Estoque" type="text" placeholder="Quantidade em Estoque"  required>
                            <label for="Estoque"></label>                         
                            <br>
                            <br>
                            <input type="hidden" name="id" value="<?php echo $idcadastro_produtos ?>"> 
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