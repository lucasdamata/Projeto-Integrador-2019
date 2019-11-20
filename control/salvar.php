<?php

require $_SERVER["DOCUMENT_ROOT"] . "/Projeto-Integrador-2019/model/CategoriaModel.php";

$model = new CategoriaModel();


$id = $_POST["id"];
$descP = $_POST["descricaoP"];
$descC = $_POST["descricaoC"];
$tituloC = $_POST["tituloC"];
$tituloCP = $_POST["tituloCP"];

if($id == ""){  
    $model->inserir($descP,$descC,$tituloC,$tituloCP);
}else{
    $model->alterar($id,$descP,$descC,$tituloC,$tituloCP);
}


echo "Categoria inserida com sucesso.";

?>