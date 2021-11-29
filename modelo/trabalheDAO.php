<?php
    class TrabalheDAO{
        function buscarEmail($email, $conn){
            include_once('../visao/trabalhe.php');

            $consulta = $conn -> query("SELECT * FROM trabalhe WHERE email LIKE '%$email%'");
            $total_retornado = $consulta -> rowCount();

            echo "
            <body class='container'>
            ";

            if($total_retornado === 0){
                echo "
                <script>
                    alert('Registro não encontrado!');
                    window.location = '../visao/trabalhe.php';
                </script>
                ";
            }else{
                echo "
                <table class='table table-striped'>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Nascimento</th>
                        <th>Celular</th>
                        <th>E-Mail</th>
                        <th>Curriculo</th>
                        <th>Ações</th>
                    </tr>
                ";
                while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                    echo "
                    <tr>
                        <td>".$linha['id']."</td>
                        <td>".$linha['nome']."</td>
                        <td>".$linha['sobrenome']."</td>
                        <td>".$linha['nascimento']."</td>
                        <td>".$linha['celular']."</td>
                        <td>".$linha['email']."</td>
                        <td>".$linha['curriculo']."</td>
                        <td>
                            <form method='POST' action='../controle/controleTrabalhe.php'>
                                <div class='d-flex justify-content-center'>
                                    <input class='btn btn-danger' type='submit' name='excluir' value='Excluir'>
                                </div>
                                <div class='d-flex justify-content-center'>
                                    <input type='hidden' name='id' value='".$linha['id']."'>
                                </div>
                            </form>
                        </td>
                    </tr>
                    ";
                }
                echo "
                </tabel>
                ";
            }
            echo "
            </body>
            ";
        }

        function buscarNome($nome, $conn){
            include_once('../visao/trabalhe.php');

            $consulta = $conn -> query("SELECT * FROM trabalhe WHERE nome LIKE '%$nome%'");
            $total_retornado = $consulta -> rowCount();

            echo "
            <body class='container'>
            ";

            if($total_retornado === 0){
                echo "
                <script>
                    alert('Registro não encontrado!');
                    window.location = '../visao/trabalhe.php';
                </script>
                ";
            }else{
                echo "
                <table class='table table-striped'>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Nascimento</th>
                        <th>Celular</th>
                        <th>E-Mail</th>
                        <th>Curriculo</th>
                        <th>Ações</th>
                    </tr>
                ";
                while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                    echo "
                    <tr>
                        <td>".$linha['id']."</td>
                        <td>".$linha['nome']."</td>
                        <td>".$linha['sobrenome']."</td>
                        <td>".$linha['nascimento']."</td>
                        <td>".$linha['celular']."</td>
                        <td>".$linha['email']."</td>
                        <td>".$linha['curriculo']."</td>
                        <td>
                            <form method='POST' action='../controle/controleTrabalhe.php'>
                                <div class='d-flex justify-content-center'>
                                    <input class='btn btn-danger' type='submit' name='excluir' value='Excluir'>
                                </div>
                                <div class='d-flex justify-content-center'>
                                    <input type='hidden' name='id' value='".$linha['id']."'>
                                </div>
                            </form>
                        </td>
                    </tr>
                    ";
                }
                echo "
                </tabel>
                ";
            }
            echo "
            </body>
            ";
        }

        function buscarSobrenome($sobrenome, $conn){
            include_once('../visao/trabalhe.php');

            $consulta = $conn -> query("SELECT * FROM trabalhe WHERE sobrenome LIKE '%$sobrenome%'");
            $total_retornado = $consulta -> rowCount();

            echo "
            <body class='container'>
            ";

            if($total_retornado === 0){
                echo "
                <script>
                    alert('Registro não encontrado!');
                    window.location = '../visao/trabalhe.php';
                </script>
                ";
            }else{
                echo "
                <table class='table table-striped'>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Nascimento</th>
                        <th>Celular</th>
                        <th>E-Mail</th>
                        <th>Curriculo</th>
                        <th>Ações</th>
                    </tr>
                ";
                while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                    echo "
                    <tr>
                        <td>".$linha['id']."</td>
                        <td>".$linha['nome']."</td>
                        <td>".$linha['sobrenome']."</td>
                        <td>".$linha['nascimento']."</td>
                        <td>".$linha['celular']."</td>
                        <td>".$linha['email']."</td>
                        <td>".$linha['curriculo']."</td>
                        <td>
                            <form method='POST' action='../controle/controleTrabalhe.php'>
                                <div class='d-flex justify-content-center'>
                                    <input class='btn btn-danger' type='submit' name='excluir' value='Excluir'>
                                </div>
                                <div class='d-flex justify-content-center'>
                                    <input type='hidden' name='id' value='".$linha['id']."'>
                                </div>
                            </form>
                        </td>
                    </tr>
                    ";
                }
                echo "
                </tabel>
                ";
            }
            echo "
            </body>
            ";
        }

        function listar($conn){
            include_once('../visao/trabalhe.php');

            $consulta = $conn -> query("SELECT * FROM trabalhe");
            $registros = $consulta -> rowCount();

            echo "
            <body class='container'>
            ";

            if($registros){
                echo "
                <table class='table table-striped'>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Nascimento</th>
                        <th>Celular</th>
                        <th>E-Mail</th>
                        <th>Curriculo</th>
                        <th>Ações</th>
                    </tr>
                ";
                while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                    echo "
                    <tr>
                        <td>".$linha['id']."</td>
                        <td>".$linha['nome']."</td>
                        <td>".$linha['sobrenome']."</td>
                        <td>".$linha['nascimento']."</td>
                        <td>".$linha['celular']."</td>
                        <td>".$linha['email']."</td>
                        <td>".$linha['curriculo']."</td>
                        <td>
                            <form method='POST' action='../controle/controleTrabalhe.php'>
                                <div class='d-flex justify-content-center'>
                                    <input class='btn btn-danger' type='submit' name='excluir' value='Excluir'>
                                </div>
                                <div class='d-flex justify-content-center'>
                                    <input type='hidden' name='id' value='".$linha['id']."'>
                                </div>
                            </form>
                        </td>
                    </tr>
                    ";
                }
                echo "
                </tabel>
                ";
            }else{
                echo "
                <script>
                    alert('Registro não encontrado!');
                    window.location = '../visao/trabalhe.php';
                </script>
                ";
            }
            echo "
            </body>
            ";            
        }

        function excluir($id, $conn){
            try{
                $delete = $conn -> prepare("DELETE FROM trabalhe WHERE id = $id");
                $delete -> execute();
                echo "
                <script>
                    alert('".$delete -> rowCount()." Registro deletado com sucesso!');
                    window.location = '../visao/trabalhe.php';
                </script>
                ";
            }catch(PDOException $e){
                echo "
                <script>
                    alert('Erro ao remover o registro!');
                    console.log(".$e -> getMessage().");
                    window.location = '../visao/trabalhe.php';
                </script>
                ";
            }
        }


    }
?>