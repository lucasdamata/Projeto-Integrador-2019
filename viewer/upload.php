<?php
  include("/rvarquitetura/data/DataBase.php");
  $msg = false;
  if(isset($_FILES['arquivo'])){
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    $sql_code = "INSERT INTO tb_arquivo (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";
    
  }
?>

