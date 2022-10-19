<?php 

    include_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_usuarios.css" media="screen">
    <title>Lista de Usuarios</title>
</head>
    <body>
        <h1>Usuarios:</h1>
        <hr>
            <table rules="all">
                
                <thead>  
                    <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Genero</th>
                    <th>Senha</th>
                    <th>Sobre</th>
                    </tr>
                </thead>
                
                <tbody>
                      
                    <?php
                    
                        $sql_consulta=mysqli_query( $conn, "SELECT * FROM cadastro" );

                        while($dados=mysqli_fetch_array($sql_consulta)) {
                    ?>  
                            <tr>
                            <td> <?= $dados[0] ?> </td>
                            <td> <?= $dados[1] ?> </td>
                            <td> <?= $dados[2] ?> </td>
                            <td> <?= $dados[3] ?> </td>
                            <td> <?= $dados[4] ?> </td>
                            <td> <?= $dados[5] ?> </td>
                            <td> <a href="excluir.php?codigo=<?= $dados[0]  ?>" > Excluir </a> </td>
                            <td> <a href="editar.php?codigo=<?= $dados[0]  ?>"> Editar </a> </td>
                            </tr>

                    <?php } ?>


                    

                </tbody>

            </table>

        
    </body>
</html>