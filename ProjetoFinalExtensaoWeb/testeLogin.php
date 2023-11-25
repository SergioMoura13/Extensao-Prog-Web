<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['Apelido']) && !empty($_POST['Senha']))
    {
        // Acessa
        include_once('config.php');
        $ApelidoApelido = $_POST['Email'];
        $Senha = $_POST['Senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE Apelido = '$Apelido' and Senha = '$Senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['Apelido']);
            unset($_SESSION['Senha']);
            header('Location: Login.php');
        }
        else
        {
            $_SESSION['Apelido'] = $Apelido;
            $_SESSION['Senha'] = $Senha;
            header('Location: Sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>