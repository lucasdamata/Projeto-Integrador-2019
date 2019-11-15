<?php
session_start();
include_once("conexao1.php");

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