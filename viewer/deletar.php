<?php
session_start();
include_once("conexao1.php");

if(isset($_POST['btn-delete'])):
    $sql_code = "select nome_imagem from arquivo";
    $execute = $mysqli->query($sql_code) or die($mysqli->error);
    $imagem = $execute->fetch_assoc();

    if(is_file('foto/'.$imagem['nome_imagem'])){
        $deletar = unlink('foto/'.$imagem['nome_imagem']);
        if($deletar){
            $mysqli->query("delete from arquivo where nome_imagem = '$imagem[nome_imagem]' ");
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Projeto-Integrador-2019/viewer/inicial.php'>";
        }
    }endif;
?>