<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <title id="titulo">LOGIN</title>

</head>
<h3>Faça seu Login:</h3>
<body>
    <main>
    <form action="login_script.php" method="POST">
        <div id="nome">
            <label>Usuario</label><br>
            <input type="text" name="nome" id="nome" required><br>
        </div>
        <div id="senha"><br>
            <label>Senha</label><br>
            <input type="password" name="senha" id="senha" required>
        </div>
        <br>
        <button type="submit" value="Entrar" id="entrar"> Login </button> <br>
        
        <br>
        <h1><a href="formulario.php";> Novo Cadastro </a></h1>
        
    </form>    
    </main>

</body>
</html>