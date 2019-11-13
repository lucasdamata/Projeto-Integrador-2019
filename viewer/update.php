<?php
  session_start();
  include("conexao1.php");
  
  $sobreTitulo = filter_input(INPUT_POST, 'sobreTitulo', FILTER_SANITIZE_STRING);
  $sobreDescricao = filter_input(INPUT_POST, 'sobreDescricao', FILTER_SANITIZE_STRING);

  $result_usuario = "UPDATE sobreInicial SET sobreTitulo = '$sobreTitulo', sobreDescricao = '$sobreDescricao'";
  $resultado_usuario = mysqli_query($conn, $result_usuario);

  if(mysqli_insert_id($conn)){
      $_SESSION['alertEditSobre'] = "<p style ='color:green;'>Atualização concluída com sucesso</p>";
      header('Location:inicial.php');
  }else{
      $_SESSION['alertEditSobre'] = "<p style ='color:red;'>Atualização não foi concluída com sucesso</p>";
      header('Location: inicial.php');
  }

?>