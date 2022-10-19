
<?php
    require_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $genero = $_POST['genero'];
        $senha = $_POST['senha'];
        $sobrevoce = $_POST['sobrevoce'];
                
        $sql = mysqli_query( $conn, "INSERT INTO cadastro (nome, email, genero, senha, sobrevoce) VALUES ('$nome', '$email', '$genero', '$senha', '$sobrevoce')" ); 

        if ($sql==true) {
            echo "<script>
                alert('Usuário cadastrado com sucesso!');
                window.location.href='login.php';
                </script>";

        }else {
            echo "<script>
                alert('Algo deu errado');
                window.location.href='formulario.php';
                </script>";

        }
?>

