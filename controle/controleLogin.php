<?php
    include_once('../modelo/conexao.php');
    include_once('../modelo/loginDAO.php');

    $conexao = new Conexao();
    $conn = $conexao -> conectar();
    $loginDAO = new LoginDAO();
    
    if(isset($_POST["login"])){
        $loginDAO -> logar($_POST["email"], $_POST["senha"], $conn);
    }

    if(isset($_POST["sair"])){
        $loginDAO -> logout();
    }
?> 