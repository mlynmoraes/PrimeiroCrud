<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style_formulario.css" media="screen"> 
    <title>Cadastro</title>
    
</head>
<body>
    <h1 id="titulo">
        Insira as informações abaixo:
    </h1><br>
    <main>
        <form action="cadastro_script.php" method="POST">
        
            <div>
                <label>Nome</label><br>
                <input type="text" name="nome" id="nome" placeholder="insira aqui.." required>
            </div><br>
            <div>
                <label>Email</label><br>
                <input type="email" name="email" id="email" placeholder="seu email..." required><br>
            </div><br>
            <div>
                <label>Como você se identifica?</label><br>
                <label>
                    <input type="radio" name="genero" value="feminino">Feminino
                </label><br>
                <label>
                    <input type="radio" name="genero" value="masculino">Masculino
                </label><br>
            </div>
            <div>
                <label> Crie sua senha: </label><br>
                <label>
                    <input type="password" name="senha" value="senha" required><br>
                </label><br>
                <label>Me conte um pouco sobre você!</label><br>
                <textarea rows="10" style="width: 30em" name="sobrevoce"></textarea>
            </div>
         <br>
        <div id="botao">
            <button type="submit" name="botao">CADASTRAR</button>
        </div><br>
        <a href="login.php">Voltar para o Login</a>
        </form>
    </main>
    
</body>
</html>