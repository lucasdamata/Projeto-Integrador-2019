<?php
class DataBase{
    private $conexao;
	 
	public function getConexao(){
	    $this->conexao =  new PDO("mysql:dbname=rvarquitetura; host=localhost", "root", "");
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->conexao->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		$this->conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $this->conexao;
	}

    public function closeConnection(){
        $this->$conexao = null;
    }

}
?>