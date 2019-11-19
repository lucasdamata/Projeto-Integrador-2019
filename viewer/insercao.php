<?php
session_start();
include_once("conexao1.php");

//inserção tabela sobre
$sobreTitulo = filter_input(INPUT_POST, 'sobreTitulo', FILTER_SANITIZE_STRING);
$sobreDescricao = filter_input(INPUT_POST, 'sobreDescricao', FILTER_SANITIZE_STRING);

$result = "INSERT INTO sobreInicial (sobreTitulo, sobreDescricao, created) VALUES ('$sobreTitulo', '$sobreDescricao', NOW())";
$resultado_user = mysqli_query($conn, $result);

if(mysqli_insert_id($conn)){
    $_SESSION['alertSobre'] = "<p style ='color:green;'>Informações do campo cadastradas com sucesso.</p>";
    header("Location:inicial.php");
}else{
    $_SESSION['alertSobre'] = "<p style ='color:red;'>Informações não foram cadastradas com sucesso.</p>";
    header("Location:inicial.php");
}

//inserção tabela cardsInicial
$tituloCards = filter_input(INPUT_POST, 'tituloCards', FILTER_SANITIZE_STRING);
$descricaoCards = filter_input(INPUT_POST, 'descricaoCards', FILTER_SANITIZE_STRING);

$resultadoCard = "INSERT INTO cardsInicial (tituloCards, descricaoCards, created) VALUES ('$tituloCards', '$descricaoCards', NOW())";
$resultadoUser = mysqli_query($conn, $resultadoCard);

if(mysqli_insert_id($conn)){
    $_SESSION['alertCards'] = "<p style ='color:green;'>Informações do campo cadastradas com sucesso.</p>";
    header("Location:inicial.php");
}else{
    $_SESSION['alertCards'] = "<p style ='color:red;'>Informações não foram cadastradas com sucesso.</p>";
    header("Location:inicial.php");
}

?>