<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $idcadastro_produtos = $_GET['id'];

        $sqlSelect = "SELECT *  FROM cadastro_produtos WHERE idcadastro_produtos=$idcadastro_produtos";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM  cadastro_produtos WHERE idcadastro_produtos=$idcadastro_produtos";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: Sistema.php');
   
?>