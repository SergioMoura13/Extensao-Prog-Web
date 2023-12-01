<?php
    include_once('config.php');

        if(isset($_POST['update'])){

                    $idcadastro_produtos = $_POST['idcadastro_produtos'];
                    $nome_produto = $_POST['nome_produto'];
                    $codigo = $_POST['codigo'];
                    $valor = $_POST['valor'];
                    $descricao = $_POST['descricao'];
                    $estoque = $_POST['estoque'];

                    $sqlUpdate = "UPDATE cadastro_produtos SET nome_produto='$nome_produto', codigo='$codigo', valor='$valor', descricao='$descricao', estoque='$estoque'
                    WHERE  idcadastro_produtos='$idcadastro_produtos'";

                $result = $conexao->query($sqlUpdate);

        }
                    
        header('Location: Produtos.php');
?>