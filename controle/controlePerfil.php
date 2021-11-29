<?php
    include_once('../modelo/perfilDAO.php');
    include_once('../modelo/conexao.php');

    $conexao = new Conexao();
    $conn = $conexao -> conectar();
    $perfilDAO = new PerfilDAO();

    if(isset($_POST["atualizar"])){
    $perfilDAO -> atualizar($_POST["id"], $_POST["nome"], $_POST["nascimento"], $_POST["celular"], $_POST["email"], $_POST["senha"], $conn);
    }
?>