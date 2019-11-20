<?php
session_start();
include_once("conexao1.php");

//inserção tabela sobre
$cardTitulo = filter_input(INPUT_POST, 'cardTitulo', FILTER_SANITIZE_STRING);
$cardDescricao = filter_input(INPUT_POST, 'cardDescricao', FILTER_SANITIZE_STRING);

$resultado = "INSERT INTO cardInicial (cardTitulo, cardDescricao, created) VALUES ('$cardTitulo', '$cardDescricao', NOW())";
$resultado_user = mysqli_query($conn, $resultado);

if(mysqli_insert_id($conn)){
    $_SESSION['alertCard'] = "<p style ='color:green;'>Card cadastrado com sucesso.</p>";
    header("Location:inicial.php");
}else{
    $_SESSION['alertCard'] = "<p style ='color:red;'>Card não foi cadastrado com sucesso.</p>";
    header("Location:inicial.php");
}

?>