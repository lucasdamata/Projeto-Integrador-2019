<?php
  session_start();
  include_once("conexao1.php");
 
  //Edição do tírulo da sessão
  if(isset($_POST['btn-editarTitulo'])):
    $tituloSessao = mysqli_escape_string($conn, $_POST['tituloSessao']);

    $result_titulo = "UPDATE sessao SET tituloSessao = '$tituloSessao' WHERE id = '1'";

    if(mysqli_query($conn, $result_titulo)):
      $_SESSION['alertEditTitulo'] = "<p style ='color:green;'>Atualização concluída com sucesso!</p>";
      header('Location: inicial.php');
    else:
      $_SESSION['alertEditTiulo'] = "<p style ='color:red;'>Atualização não foi concluída com sucesso!</p>";
      header('Location: inicial.php');
    endif;
  endif;

  //Edição do card1
  if(isset($_POST['btn-editar1'])):
      $cardTitulo = mysqli_escape_string($conn, $_POST['cardTitulo']);
      $cardDescricao = mysqli_escape_string($conn, $_POST['cardDescricao']);

      $result_card1 = "UPDATE cardInicial SET cardTitulo = '$cardTitulo', cardDescricao = '$cardDescricao' WHERE id = '1'";

      if(mysqli_query($conn, $result_card1)):
        $_SESSION['alertEditCard1'] = "<p style ='color:green;'>Atualização concluída com sucesso!</p>";
        header('Location: inicial.php');
      else:
        $_SESSION['alertEditCard1'] = "<p style ='color:red;'>Atualização não foi concluída com sucesso!</p>";
        header('Location: inicial.php');
      endif;
    endif;

    //Edição do card2
    if(isset($_POST['btn-editar2'])):
      $cardTitulo = mysqli_escape_string($conn, $_POST['cardTitulo']);
      $cardDescricao = mysqli_escape_string($conn, $_POST['cardDescricao']);

      $result_card2 = "UPDATE cardInicial SET cardTitulo = '$cardTitulo', cardDescricao = '$cardDescricao' WHERE id = '2'";

      if(mysqli_query($conn, $result_card2)):
        $_SESSION['alertEditCard2'] = "<p style ='color:green;'>Atualização concluída com sucesso!</p>";
        header('Location: inicial.php');
      else:
        $_SESSION['alertEditCard2'] = "<p style ='color:red;'>Atualização não foi concluída com sucesso!</p>";
        header('Location: inicial.php');
      endif;
    endif;

    //Edição do card3
    if(isset($_POST['btn-editar3'])):
      $cardTitulo = mysqli_escape_string($conn, $_POST['cardTitulo']);
      $cardDescricao = mysqli_escape_string($conn, $_POST['cardDescricao']);

      $result_card3 = "UPDATE cardInicial SET cardTitulo = '$cardTitulo', cardDescricao = '$cardDescricao' WHERE id = '3'";

      if(mysqli_query($conn, $result_card3)):
        $_SESSION['alertEditCard3'] = "<p style ='color:green;'>Atualização concluída com sucesso!</p>";
        header('Location: inicial.php');
      else:
        $_SESSION['alertEditCard3'] = "<p style ='color:red;'>Atualização não foi concluída com sucesso!</p>";
        header('Location: inicial.php');
      endif;
    endif;
?>