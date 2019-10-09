<?php

require $_SERVER['DOCUMENT_ROOT']."/Projeto-Integrador-2019/data/DataBase.php";

class CategoriaModel{
    private $database;

	function __construct(){
		$this->database = new DataBase();
    }
    
    public function inserir($descricao){
	
		$conn = $this->database->getConnection();

		$query = $conn->prepare("INSERT INTO tb_portifolio (titulo,imagem,descricao) VALUES (:descricao)");
				
		$query->bindParam(":descricao", $descricao);
				
		$query->execute();
	}







}