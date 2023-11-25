<?php
    session_start();
    
    if((!isset($_SESSION['Apelido']) == true) and(!isset($_SESSION['Senha']) == true))
    {
        unset($_SESSION['Apelido']);
        unset($_SESSION['Senha']);
        header('Location: Login.php');

    }
    else{
        $logado = $_SESSION['Apelido'];
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
    <link rel="stylesheet" href="sistema.css"/>
    <title>Sistema</title>
</head>
<body>
    <div id="video-container">
    <div class="background-image">

        <header>
            <div class="navbar">
                <div class="logo"><a href="#">Sistema</a></div>
                <ul class="links">
                    <li><a href="index.html">Home</a></li>
                <li><a href="atualizarCadastro.php">Atualizar Cadastro</a></li>
                <li><a href="Produtos.php">Produtos</a></li>
                <li><a href="cadastroUsuario.php">Cadastrar Produtos</a></li>
                </ul>

              
                <a href="Sair.php" class="action_btn">Sair</a>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
    
                <div class="dropdown_menu">
                    <li><a href="index.html">Home</a></li>
                <li><a href="Sobre.html">About</a></li>
                <li><a href="Produtos.html">Produtos</a></li>
                <li><a href="cadastroUsuario.php">Cadastrar Produtos</a></li>
                    <li><a href="#" class="action_btn">Sair</a></li>
                </div>
    
            </div>
        </header>
    
        <main>
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