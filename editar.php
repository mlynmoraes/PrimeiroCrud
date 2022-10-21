<?php

    include_once('conexao.php');

    $id = $_GET['codigo'];

    $sql_verificar = mysqli_query( $conn, " SELECT * FROM cadastro WHERE id='$id' ");

    $result = mysqli_fetch_array($sql_verificar);
    

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style_editar.css" media="screen"> 
    <title>EDIÇÃO</title>
    
</head>
<body>
    <h1 id="titulo">
        Edição do Usuário
    </h1><br>
    <main>
        <form action="atualizar.php" method="POST">
        
            <div>
                <input type="hidden" name="codigo" value='<?= $result[0] ?>'>
            </div>

            <div>
                <label>Nome</label><br>
                <input type="text" name="nome" value='<?= $result[1] ?>' required>
            </div><br>
            <div>
                <label>Email</label><br>
                <input type="email" name="email" value='<?= $result[2] ?>' required><br>
            </div><br>
            <div>
                <label>Senha:</label><br>
                <label>
                <input type="password" name="senha" value='<?= $result[4] ?>' required><br>
                </label><br>
            </div>
         <br>
        <div id="botao">
            <button type="submit" name="botao">ATUALIZAR</button>
        </div><br>
        <a href="login.php">Voltar para o Login</a><br>
        <a href="listarUsuarios.php">Voltar para Usuarios</a>
        </form>
    </main>
    
</body>
</html>