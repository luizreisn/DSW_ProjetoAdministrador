<!DOCTYPE html>
<html lang="pt-br">
    
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="../visao/css/lo.css" rel="stylesheet">
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
                    <li class="nav-item"><a class="nav-link" href="../visao/cadastro.php">Cadastrar</a></li>
                </ul>
            </div>
        </div>
    </nav>

	<div class="d-flex justify-content-center">
		<div class="logo-card">
			<div class="d-flex justify-content-center">
				<img class="logo" src="../img/logo.png" alt="Logo Cherno & Byl´s">
			</div>
		</div>

		<div class="card-login" >
			<h4 class="text-center">Faça login</h4>
			<div class="d-flex justify-content-center">
				<form action="../controle/controleLogin.php" method="POST">
					<div class="input-group">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" name="email" id="email" class="form-control" placeholder="e-mail" title="Digite um e-mail valido!" required>
					</div>
					<div class="input-group">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="senha" id="senha" class="form-control" placeholder="senha" pattern=".{8,50}" title="Digite uma senha com no mínimo 8 e no máximo 50 caracteres!" required>
					</div>
                    
                    <br>

                    <div class="d-flex justify-content-center">
                        <a class="cadastro" href="../visao/cadastro.php">Ainda não tem cadastro? Cadastre-se aqui...</a>
                    </div>

					<br>

					<div class="d-flex justify-content-center">
						<button type="submit" name="login" id="login" class="btn btn-success btn-block">Login</button>
					</div>
					<div class="d-flex justify-content-center">
						<button type="reset" name="limpar" id="limpar" class="btn btn-danger btn-block">Limpar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<footer class="page-footer">

		<div class="text-center text-white">
			<h6 class="text-uppercase font-weight-bold">Qualquer problema entrar em contato</h6>
			<hr class="bg-success d-inline-block mx-auto" style="width: 85px; height: 2px;">
			<ul class="list-unstyled">
				<li class="my-2"><i class="fas fa-home"></i> Av. Paulista, 2000 - São Paulo</li>
				<li class="my-2"><i class="fas fa-envelope"></i><a href="mailto:chernobyls@gmail.com">
						chernobyls@gmail.com</a></li>
				<li class="my-2"><i class="fas fa-phone"></i> +55 (11) 1111-1111</li>
				<li class="my-2"><i class="fas fa-phone"></i> +55 (11) 2222-2222</li>
			</ul>
		</div>

        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-12 text-center">
                    <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-linkedin text-white"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-copyright text-center text-white py-3">
            <p>&copy; 2021 Cherno & Byl´s Company. <br> Todos os direitos reservados.</p>
        </div>
    </footer>

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