<?php
    include_once('../modelo/conexao.php');
    include_once('../modelo/trabalheDAO.php');

    $conexao = new Conexao();
    $conn = $conexao -> conectar();
    $trabalheDAO = new TrabalheDAO();

    if(isset($_POST["buscarEmail"])){
        $trabalheDAO -> buscarEmail($_POST["email"], $conn);
    }

    if(isset($_POST["buscarNome"])){
        $trabalheDAO -> buscarNome($_POST["nome"], $conn);
    }

    if(isset($_POST["buscarSobrenome"])){
        $trabalheDAO -> buscarSobrenome($_POST["sobrenome"], $conn);
    }

    if(isset($_POST["listar"])){
        $trabalheDAO -> listar($conn);
    }

    if(isset($_POST["excluir"])){
        $trabalheDAO -> excluir($_POST["id"], $conn);
    }

?>