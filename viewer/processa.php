<?php
session_start();
include_once("conexao1.php");

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

//echo "Título: $titulo <br>";
//echo "Descrição: $descricao <br>";

$result_usuario = "INSERT INTO projetos (titulo, descricao, created) VALUES ('$titulo', '$descricao', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style ='color:green;'>Projeto cadastrado com sucesso</p>";
    header("Location:indexadm.php");
}else{
    $_SESSION['msg'] = "<p style ='color:red;'>Projeto não foi cadastrado com sucesso</p>";
    header("Location: indexadm.php");
}