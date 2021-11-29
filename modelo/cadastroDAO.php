<?php
    class CadastroDAO{

        function cadastrar($nome, $nascimento, $celular, $email, $senha, $conn){
            $verifica = $conn -> query("SELECT * FROM funcionario WHERE email = '$email'");
            $total_retornado = $verifica -> rowCount();

            if($total_retornado === 0){
                try{
                    $pdo = $conn;
                    $stmt = $pdo -> prepare("INSERT INTO funcionario (nome, nascimento, celular, email, senha) VALUES (:nome, :nascimento, :celular, :email, :senha)");
                    $stmt -> execute(array("nome" => "$nome", "nascimento" => "$nascimento", "celular" => "$celular", "email" => "$email", "senha" => "$senha"));
                    $consulta = $conn -> query("SELECT * FROM funcionario WHERE email = '$email'");
                    if($linha = $consulta -> fetch(PDO::FETCH_ASSOC)){
                        session_start();
                        include_once('../modelo/funcionario.php');
                        $funcionario = new Funcionario($linha['id'], $linha['nome'], $linha['nascimento'], $linha['celular'], $linha['email'], $linha['senha']);
                        $_SESSION["obj_funcionario"] = $funcionario;
                        echo "
                        <script>
                            alert('Registro cadastrado com sucesso!');
                            window.location = '../visao/home.php';
                        </script>
                        ";
                    }
                }catch(PDOException $e){
                    echo "<script>
                            alert('Erro ao cadastrar!');
                            console.log(".$e -> getMessage().");
                            window.location = '../visao/cadastro.php';
                         </script>";
                }
            }else{
                echo "
                <script>
                    alert('Este E-Mail já esta sendo usado!');
                    window.location = '../visao/cadastro.php';
                </script>
                ";
            }
        }
    }
?>