<?php
    include_once('../modelo/conexao.php');
    include_once('../modelo/contatoDAO.php');

    $conexao = new Conexao();
    $conn = $conexao -> conectar();
    $contatoDAO = new ContatoDAO();

    if(isset($_POST["buscarEmail"])){
        $contatoDAO -> buscarEmail($_POST["email"], $conn);
    }

    if(isset($_POST["buscarNome"])){
        $contatoDAO -> buscarNome($_POST["nome"], $conn);
    }

    if(isset($_POST["buscarSobrenome"])){
        $contatoDAO -> buscarSobrenome($_POST["sobrenome"], $conn);
    }

    if(isset($_POST["listar"])){
        $contatoDAO -> listar($conn);
    }

    if(isset($_POST["excluir"])){
        $contatoDAO -> excluir($_POST["id"], $conn);
    }
?>