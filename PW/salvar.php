<?php

$servidor = "localhost:3306";
$usuario = "root";
$senha = "";
$banco = "cadastro";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO pessoa (nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";
        
if (mysqli_query($conexao, $sql)) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar.";
}
mysqli_close($conexao);
?>