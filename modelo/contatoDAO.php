<?php
    class ContatoDAO{

        function buscarEmail($email, $conn){
            include_once('../visao/contato.php');

            $consulta = $conn -> query("SELECT * FROM contato WHERE email = '$email'");
            $total_retornado = $consulta -> rowCount();

            echo "
            <body class='container'>
            ";

            if($total_retornado === 0){
                echo "
                <script>
                    alert('Registro não encontrado!');
                </script>
                ";
            }else{
                echo "
                <table class='table table-striped'>
                    <tr style='color:white;'>
                        <th style='background-color:#682a8f'>Id</th>
                        <th style='background-color:#682a8f'>Nome</th>
                        <th style='background-color:#682a8f'>Celular</th>
                        <th style='background-color:#682a8f'>E-Mail</th>
                        <th style='background-color:#682a8f'>Mensagem</th>
                        <th style='background-color:#682a8f'>Ações</th>
                    </tr>
                ";
                while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                    echo "
                    <tr style='color:white;'>
                        <td>".$linha['id']."</td>
                        <td>".$linha['nome']."</td>
                        <td>".$linha['celular']."</td>
                        <td>".$linha['email']."</td>
                        <td>".$linha['mensagem']."</td>
                        <td>
                            <form method='POST' action='../controle/controleContato.php'>
                                <div class='d-flex justify-content-center'>
                                    <input style='margin-bottom:20px;' class='btn btn-danger mr-3' type='submit' name='excluir' value='Excluir'>
                                </div>
                                <div class='d-flex justify-content-center'>
                                    <input style='margin-bottom:20px' type='hidden' name='id' value='".$linha['id']."'>
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
            include_once('../visao/contato.php');

            $consulta = $conn -> query("SELECT * FROM contato WHERE nome LIKE '%$nome%'");
            $total_retornado = $consulta -> rowCount();

            echo "
            <body class='container'>
            ";

            if($total_retornado === 0){
                echo "
                <script>
                    alert('Registro não encontrado!');
                </script>
                ";
            }else{
                echo "
                <table class='table table-striped'>
                    <tr style='color:white;'>
                        <th style='background-color:#682a8f'>Id</th>
                        <th style='background-color:#682a8f'>Nome</th>
                        <th style='background-color:#682a8f'>Celular</th>
                        <th style='background-color:#682a8f'>E-Mail</th>
                        <th style='background-color:#682a8f'>Mensagem</th>
                        <th style='background-color:#682a8f'>Ações</th>
                    </tr>
                ";
                while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                    echo "
                    <tr style='color:white;'>
                        <td>".$linha['id']."</td>
                        <td>".$linha['nome']."</td>
                        <td>".$linha['celular']."</td>
                        <td>".$linha['email']."</td>
                        <td>".$linha['mensagem']."</td>
                        <td>
                            <form method='POST' action='../controle/controleContato.php'>
                                <div class='d-flex justify-content-center'>
                                    <input style='margin-bottom:20px;' class='btn btn-danger mr-3' type='submit' name='excluir' value='Excluir'>
                                </div>
                                <div class='d-flex justify-content-center'>
                                    <input style='margin-bottom:20px' type='hidden' name='id' value='".$linha['id']."'>
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
            include_once('../visao/contato.php');

            $consulta = $conn -> query("SELECT * FROM contato");
            $registros = $consulta -> rowCount();

            echo "
            <body class='container'>
            ";

            if($registros){
                echo "
                <table class='table table-striped'>
                    <tr style='color:white;'>
                        <th style='background-color:#682a8f'>Id</th>
                        <th style='background-color:#682a8f'>Nome</th>
                        <th style='background-color:#682a8f'>Celular</th>
                        <th style='background-color:#682a8f'>E-Mail</th>
                        <th style='background-color:#682a8f'>Mensagem</th>
                        <th style='background-color:#682a8f'>Ações</th>
                    </tr>
                ";
                while($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                    echo "
                    <tr style='color:white;'>
                        <td>".$linha['id']."</td>
                        <td>".$linha['nome']."</td>
                        <td>".$linha['celular']."</td>
                        <td>".$linha['email']."</td>
                        <td>".$linha['mensagem']."</td>
                        <td>
                            <form method='POST' action='../controle/controleContato.php'>
                                <div class='d-flex justify-content-center'>
                                    <input style='margin-bottom:20px;' class='btn btn-danger mr-3' type='submit' name='excluir' value='Excluir'>
                                </div>
                                <div class='d-flex justify-content-center'>
                                    <input style='margin-bottom:20px' type='hidden' name='id' value='".$linha['id']."'>
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
                echo "<script>
                        alert('Não há registros!');
                      </script>";
            }

            echo "
            </body>
            ";
        }

        function excluir($id, $conn){
            try{
                $delete = $conn -> prepare("DELETE FROM contato WHERE id = $id");
                $delete -> execute();
                echo "
                <script>
                    alert('".$delete -> rowCount()." Registro deletado com sucesso!');
                    window.location = '../visao/contato.php';
                </script>
                ";
            }catch(PDOException $e){
                echo "<script>
                        alert('Erro ao remover o registro!');
                        console.log(".$e -> getMessage().");
                      </script>";
            }
        }


    }
?>