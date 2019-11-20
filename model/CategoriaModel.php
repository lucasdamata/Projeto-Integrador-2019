<?php

require $_SERVER['DOCUMENT_ROOT']."/Projeto-Integrador-2019/data/DataBase.php";

class CategoriaModel{
	
	private $database;

	function __construct(){
		$this->database = new DataBase();
	}
	
	public function todos(){
		$conn = $this->database->getConnection();
			
		$query = $conn->query("SELECT * FROM curso order by id");
	
		$categorias = $query->fetchAll();
			
		return $categorias;
	}
	

	
	public function porId($id){
		$conn = $this->database->getConnection();
		
		$query = $conn->prepare("SELECT * FROM curso WHERE id = :id");
		
		$query->bindParam(":id", $id);
		
		
		$query->execute();
					
		$categoria = $query->fetch();
		
		return $categoria;
	}
	
	public function inserir($descPessoal,$descCurso,$tituloCurso,$tituloCapitulo){
	
		$conn = $this->database->getConnection();

		$query = $conn->prepare("INSERT INTO curso (descricaoPessoal,descricaoCurso,tituloConteudo,tituloCapitulo) VALUES (:descricaoP,:descricaoC,:tituloC,:tituloCP)");
				
		$query->bindParam(":descricaoP", $descPessoal);
		$query->bindParam(":descricaoC", $descCurso);
		$query->bindParam(":tituloC", $tituloCurso);
		$query->bindParam(":tituloCP", $tituloCapitulo);
				
		$query->execute();
	}


	public function alterar($idCurso,$descPessoal,$descCurso,$tituloCurso,$tituloCapitulo){

		$conn = $this->database->getConnection();
				
		$query = $conn->prepare("UPDATE curso set descricaoPessoal = :descricaoP descricaoCurso = :descricaoC tituloConteudo = :tituloC tituloCapitulo = :tituloCP where id = :id");
				
		$query->bindParam(":id", $idCurso);
		$query->bindParam(":descricaoP", $descricaoPessoal);
		$query->bindParam(":descricaoC", $descCurso);
		$query->bindParam(":tituloC", $tituloCurso);
		$query->bindParam(":tituloCP", $tituloCapitulo);
				
		$query->execute();
			
	}
	
	public function excluir($id){

		$conn = $this->database->getConnection();
	
		$query = $conn->prepare("DELETE FROM curso WHERE id = :id");
	
		$query->bindParam(":id", $id);
	
		$query->execute();
	}
}