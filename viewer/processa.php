<?php
session_start();
include_once("conexao1.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Descrição: $descricao <br>";

$result_usuario = "INSERT INTO usuarios (nome, descricao, created) VALUES ('$nome', '$descricao', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style ='color:green;'>Projeto cadastrado com sucesso</p>";
    header("Location:indexadm.php");
}else{
    $_SESSION['msg'] = "<p style ='color:red;'>Projeto não foi cadastrado com sucesso</p>";
    header("Location: indexadm.php");
}