<?php
require $_SERVER['DOCUMENT_ROOT']."/Projeto-Integrador-2019/model/CategoriaModel.php";

$model = new CategoriaModel();

$categorias = $model->todos();

echo json_encode($categorias);
?>