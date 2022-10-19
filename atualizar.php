<?php
    require_once('conexao.php');


        $id = $_POST['codigo'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
                
        $sql_atualizar = mysqli_query( $conn, " UPDATE cadastro SET nome='$nome', email='$email', senha='$senha' WHERE id='$id' " ); 

            if ($sql_atualizar==true) {
                echo "<script>
                    alert('Usuário alterado com sucesso!');
                    window.location.href='listarUsuarios.php';
                    </script>";

            }else {
                echo "<script>
                    alert('Algo deu errado');
                    window.location.href='listarUsuarios.php';
                    </script>";

            }
?>