<?php
    class LoginDAO{
        function logar($email, $senha, $conn){
            $verifica = $conn -> query("SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha'");
            $total_retornado = $verifica -> rowCount();

            if($total_retornado === 0){
                echo "
                <script>
                    alert('O E-mail / senha estão incorretos ou não existem nos nossos registros!');
                    window.location = '../visao/login.php';
                </script>
                ";
            }else{
                try{
                    if($linha = $verifica -> fetch(PDO::FETCH_ASSOC)){
                        session_start();
                        include_once('../modelo/funcionario.php');
                        $funcionario = new Funcionario($linha['id'], $linha['nome'], $linha['nascimento'], $linha['celular'], $linha['email'], $linha['senha']);
                        $_SESSION["obj_funcionario"] = $funcionario;
                        echo "
                        <script>
                            alert('Login realizado com sucesso!');
                            window.location = '../visao/home.php';
                        </script>
                        ";
                    }
                }catch(PDOException $e){
                    echo "
                    <script>
                        alert('Erro ao realizar o login!');
                        console.log(".$e -> getMessage().");
                        window.location = '../visao/login.php';
                    </script>
                    ";
                }
            }
        }

        function logout(){
            session_start();
            session_destroy();
            unset($_SESSION);
            header("location:../visao/login.php");
            echo "
            <script>
                alert('Logout realizado com sucesso!');
            </script>
            ";
        }
    }
?>