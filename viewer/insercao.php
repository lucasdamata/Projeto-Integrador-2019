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
?>