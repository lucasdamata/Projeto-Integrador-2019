<?php
  session_start();
  include_once("conexao1.php");
  
  if(isset($_POST['btn-editar'])):
      $sobreTitulo = mysqli_escape_string($conn, $_POST['sobreTitulo']);
      $sobreDescricao = mysqli_escape_string($conn, $_POST['sobreDescricao']);

      $result_usuario = "UPDATE sobreInicial SET sobreTitulo = '$sobreTitulo', sobreDescricao = '$sobreDescricao' WHERE id = '1'";

      if(mysqli_query($conn, $result_usuario)):
        $_SESSION['alertEditSobre'] = "<p style ='color:green;'>Atualização concluída com sucesso!</p>";
        header('Location: inicial.php');
      else:
        $_SESSION['alertEditSobre'] = "<p style ='color:red;'>Atualização não foi concluída com sucesso!</p>";
        header('Location: inicial.php');
      endif;
    endif;
  /*$sobreTitulo = filter_input(INPUT_POST, 'sobreTitulo', FILTER_SANITIZE_STRING);
  $sobreDescricao = filter_input(INPUT_POST, 'sobreDescricao', FILTER_SANITIZE_STRING);

  $result_usuario = "UPDATE sobreInicial SET sobreTitulo = '$sobreTitulo', sobreDescricao = '$sobreDescricao'";
  $resultado_usuario = mysqli_query($conn, $result_usuario);

  if(mysqli_update_id($conn)){
      $_SESSION['alertEditSobre'] = "<p style ='color:green;'>Atualização concluída com sucesso</p>";
      header('Location: inicial.php');
  }else{
      $_SESSION['alertEditSobre'] = "<p style ='color:red;'>Atualização não foi concluída com sucesso</p>";
      header('Location: inicial.php');
  }*/

?>