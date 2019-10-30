<?php
session_start();
include_once("conexao1.php");

//Processamento de dados dos campos na Página Inicial do site.
$sobreTitulo = filter_input(INPUT_POST, 'sobreTitulo', FILTER_SANITIZE_STRING);
$sobreDescricao = filter_input(INPUT_POST, 'sobreDescricao', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO paginaInicial (sobreTitulo, sobreDescricao, created) VALUES ('$sobreTitulo', '$sobreDescricao', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['alertSobre'] = "<p style ='color:green;'>Informações do camp cadastradas com sucesso</p>";
    header("Location:inicial.php");
}else{
    $_SESSION['alertSobre'] = "<p style ='color:red;'>Campo não foi cadastrado com sucesso</p>";
    header("Location:inicial.php");
}

?>