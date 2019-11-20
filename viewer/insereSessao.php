<?php
session_start();
include_once("conexao1.php");

//inserção na tabela sessão
$tituloSessao = filter_input(INPUT_POST, 'tituloSessao', FILTER_SANITIZE_STRING);
$resultadoSessao = "INSERT INTO sessao (tituloSessao, created) VALUES ('$tituloSessao', NOW())";
$resultadoUser = mysqli_query($conn, $resultadoSessao);

if(mysqli_insert_id($conn)){
    $_SESSION['alertSessao'] = "<p style ='color:green;'>Título da sessão cadastrado com sucesso.</p>";
    header("Location:inicial.php");
}else{
    $_SESSION['alertSessao'] = "<p style ='color:red;'>Informações não foram cadastradas com sucesso.</p>";
    header("Location:inicial.php");
}

?>