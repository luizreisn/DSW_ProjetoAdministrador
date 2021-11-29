<?php
    include_once('../modelo/conexao.php');
    include_once('../modelo/cadastroDAO.php');

    $conexao = new Conexao();
    $conn = $conexao -> conectar();
    $cadastroDAO = new CadastroDAO();

    if(isset($_POST["cadastrar"])){
        $cadastroDAO -> cadastrar($_POST["nome"], $_POST["nascimento"],$_POST["celular"],$_POST["email"],$_POST["senha"], $conn);
    }
?>