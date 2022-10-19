<?php

    include_once('conexao.php');

    $id = $_GET['codigo'];

    $sql_excluir=mysqli_query($conn, "DELETE FROM cadastro WHERE id='$id' ");

        if ($sql_excluir==true) {
            echo "<script>
                            alert('Usuário excluído com sucesso!');
                            window.location.href='listarUsuarios.php';
                        
                        </script>";
        }else {
            echo "<script>

                            alert('Algo deu errado');
                            window.location.href='listarUsuarios.php';
                        
                        </script>";
        }

?>