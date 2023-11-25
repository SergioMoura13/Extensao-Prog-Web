<?php
    include_once('config.php');

        if(isset($_POST['update'])){

                    $nome_produto = $user_data['NomeProduto'];
                    $codigo = $user_data['Codigo'];
                    $valor = $user_data['Valor'];
                    $descricao = $user_data['Descricao'];
                    $estoque = $user_data['Estoque'];

                    $sqlUpdate = "UPDATE cadastro_produtos SET nome_produto='$nome_produto', codigo='$codigo', valor='$valor', descricao='$descricao', estoque='$estoque'
                    WHERE  id='$idcadastro_produtos'";

        }
                    
        header('Location: Produtos.php');
?>