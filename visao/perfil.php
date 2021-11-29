<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="../visao/css/p.css" rel="stylesheet">
    <link rel="icon" href="../img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cherno & Byl´s</title>
</head>

<body>
    <?php
        include_once('../modelo/funcionario.php');
        session_start();
        $id = $_SESSION["obj_funcionario"]->getId();
        $nome = $_SESSION["obj_funcionario"]->getNome();
        $nascimento = $_SESSION["obj_funcionario"]->getNascimento();
        $celular = $_SESSION["obj_funcionario"]->getCelular();
        $email = $_SESSION["obj_funcionario"]->getEmail();
        $senha = $_SESSION["obj_funcionario"]->getSenha();
    ?>

    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <a class="navbar-left"><img class="imgLogo" src="../img/logo.png" alt="Logo Cherno & Byl´s"></a>
            <div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <li class="nav-item"><a class="nav-link" href="../visao/home.php">Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="../visao/perfil.php">Perfil</a></li>
                    <li class="nav-item"><a class="nav-link" href="../visao/contato.php">Form Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="../visao/trabalhe.php">Form Trabalhe</a></li>
                        <form action="../controle/controleLogin.php" method="POST">
                            <button type="submit" name="sair" id="sair" class="btn btn-link sair">Sair <i class="fas fa-sign-out-alt"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="espaco"></div>

    <h1 class="titulos text-center">Atualize seus dados</h1>

    <form method="POST" action="../controle/controlePerfil.php" class="formContato bolder">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" pattern="[A-Za-zÀ-ú'Ç-ç\s]+$"
                title="Apenas letras permitidas!" value="<?php echo $nome ?>" required>
        </div>
        <div class="form-group">
                <label for="nascimento">Data de Nascimento *</label>
                <input type="date" name="nascimento" id="nascimento" class="form-control" max="2003-01-01" min="1921-01-01" 
                    title="Você deve ser maior de 18 anos!" value="<?php echo $nascimento ?>" required>
            </div>
        <div class="form-group">
            <label for="cel">Celular</label>
            <input type="tel" name="celular" id="celular" class="form-control" placeholder="xx xxxxx-xxxx"
                pattern="[0-9]{2}\s[0-9]{5}-[0-9]{4}"
                title="Formato de celular incorreto! Colocar espaço entre o ddd, e colocar o simbolo -" value="<?php echo $celular ?>" required>
        </div>
        <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="xxxxx@xxxx.com"
                title="Digite um E-Mail valido!" value="<?php echo $email ?>" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" pattern=".{8,50}"
                title="Digite uma senha com no mínimo 8 e no máximo 50 caracteres!" value="<?php echo $senha ?>" required>
        </div>
        <div class="d-flex justify-content-center">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <button type="submit" name="atualizar" id="atualizar" class="btn btn-success">Atualizar Dados</button>
        </div>
    </form>

    <div class="espaco"></div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>
</html>
