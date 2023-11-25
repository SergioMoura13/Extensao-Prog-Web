<?php
    session_start();
    include_once('config.php');

    if((!isset($_SESSION['Apelido']) == true) and(!isset($_SESSION['Senha']) == true))
    {
        unset($_SESSION['Apelido']);
        unset($_SESSION['Senha']);
        header('Location: Login.php');

    }
    else{
        $logado = $_SESSION['Apelido'];
    }
    
    $sql = "SELECT * FROM cadastro_produtos ORDER BY idcadastro_produtos DESC";
    $result = $conexao->query($sql);

if (!$result) {
    die("Erro na consulta SQL: " . $conexao->error);
}
    
    
    $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="produtos.css"/>
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
                <li><a href="Servicos.html">Produtos</a></li>
                <li><a href="cadastroUsuario.php">Cadastrar Produtos</a></li>
                </ul>

              
                <a href="Sair.php" class="action_btn">Sair</a>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
    
                <div class="dropdown_menu">
                    <li><a href="index.html">Home</a></li>
                <li><a href="Sobre.html">About</a></li>
                <li><a href="Servicos.html">Produtos</a></li>
                <li><a href="cadastroUsuario.php">Cadastrar Produtos</a></li>
                    <li><a href="#" class="action_btn">Sair</a></li>
                </div>
    
            </div>
        </header>
            <div class="m-5">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Descricao</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>" .$user_data['idcadastro_produtos'] ."</td>";
                                echo "<td>" .$user_data['nome_produto'] ."</td>";
                                echo "<td>" .$user_data['codigo'] ."</td>";
                                echo "<td>" .$user_data['valor'] ."</td>";
                                echo "<td>" .$user_data['descricao'] ."</td>";
                                echo "<td>" .$user_data['estoque'] ."</td>";
                                echo "<td>
                                 <a class='btn btn-sm btn-primary' href='editarProduto.php?id=$user_data[idcadastro_produtos]'> 
                                 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                 <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                               </svg>
                                 </a>

                                 <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[idcadastro_produtos]'> 
                                 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
  <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
</svg>
                                 </a>

                                </td>";
                                echo "<tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
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