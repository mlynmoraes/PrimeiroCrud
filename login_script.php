<?php
 
    include_once('conexao.php');

    $usuario = $_POST['nome'];
    $senha = $_POST['senha'];

    //var_dump (mysqli_query($conn, " SELECT * FROM cadastro WHERE nome='$usuario' and senha='$senha' " ));die;

    $sql_logar=mysqli_query($conn, " SELECT * FROM cadastro WHERE nome='$usuario' and senha='$senha' " );

    //echo mysqli_num_rows($sql_logar); die; 

if(mysqli_num_rows($sql_logar) ===1){
	header('location:principal.php');

} else{
    echo "erro";
}


?>