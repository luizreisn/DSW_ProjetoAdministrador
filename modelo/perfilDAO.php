<?php
    class PerfilDAO{
        function atualizar($id, $nome, $nascimento, $celular, $email, $senha, $conn){
            try{
                $editar = $conn -> query("UPDATE funcionario SET nome = '$nome', nascimento = '$nascimento', celular = '$celular', email = '$email', senha = '$senha' WHERE id = '$id'");
                $editar -> execute();
                $verifica = $conn -> query("SELECT * FROM funcionario WHERE id = '$id'");
                if($linha = $verifica -> fetch(PDO::FETCH_ASSOC)){
                    session_start();
                    include_once('../modelo/funcionario.php');
                    $funcionario = new Funcionario($linha['id'], $linha['nome'], $linha['nascimento'], $linha['celular'], $linha['email'], $linha['senha']);
                    $_SESSION["obj_funcionario"] = $funcionario;
                    echo "
                    <script>
                        alert('Registro atualizado com sucesso!');
                        window.location = '../visao/perfil.php';
                    </script>
                    ";
                }
            }catch(PDOException $e){
                echo "
                <script>
                    alert('Erro ao atualizar o registro!');
                    console.log(".$e -> getMessage().");
                    window.location = '../visao/perfil.php';
                </script>
                ";
            }
        }
    }
?>