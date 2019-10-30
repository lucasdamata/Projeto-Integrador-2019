<?php
session_start();
include_once("conexao1.php");

//Processamento de dados dos projetos inseridos.
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