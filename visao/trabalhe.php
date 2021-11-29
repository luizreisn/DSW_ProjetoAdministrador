<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="../visao/css/t.css" rel="stylesheet">
    <link rel="icon" href="../img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cherno & Byl´s</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <a class="navbar-left"><img class="imgLogo" src="../img/logo.png" alt="Logo Cherno & Byl´s"></a>
            <div>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <li class="nav-item"><a class="nav-link" href="../visao/home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../visao/perfil.php">Perfil</a></li>
                    <li class="nav-item"><a class="nav-link" href="../visao/contato.php">Form Contato</a></li>
                    <li class="nav-item active"><a class="nav-link" href="../visao/trabalhe.php">Form Trabalhe</a></li>
                        <form action="../controle/controleLogin.php" method="POST">
                            <button type="submit" name="sair" id="sair" class="btn btn-link sair">Sair <i class="fas fa-sign-out-alt"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="espaco">
        <h1 class="text-center">Formulários de Trabalhe Conosco</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="../controle/controleTrabalhe.php" method="POST">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" name="email" placeholder="Buscar por E-Mail"
                            aria-label="Buscar por E-Mail" required>
                        <div class="input-group-append">
                            <input type="submit" name="buscarEmail" value="Buscar" class="btn btn-light">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="../controle/controleTrabalhe.php" method="POST">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" name="nome" placeholder="Buscar por nome"
                            aria-label="Buscar por nome" required>
                        <div class="input-group-append">
                            <input type="submit" name="buscarNome" value="Buscar" class="btn btn-light">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="../controle/controleTrabalhe.php" method="POST">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" name="sobrenome" placeholder="Buscar por sobrenome"
                            aria-label="Buscar por sobrenome" required>
                        <div class="input-group-append">
                            <input type="submit" name="buscarSobrenome" value="Buscar" class="btn btn-light">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <form action="../controle/controleTrabalhe.php" method="POST">
                    <div class="form-group form-check-inline">
                        <div class="col text-center">
                            <input type="submit" name="listar" value="Listar todos os formulários" class="btn btn-light">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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