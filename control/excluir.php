<?php

require $_SERVER["DOCUMENT_ROOT"] . "/Projeto-Integrador-2019/model/CategoriaModel.php";

$model = new CategoriaModel();

$idCategoria = $_GET["id"];

$model->excluir($idCategoria);

echo "Categoria removida.";


?>