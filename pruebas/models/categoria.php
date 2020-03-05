<?php


class Categoria{
 
    private $id;
	private $nombre;
	private $db;
	
	
	public function __construct(){
		$this->db = database::connect();
	}
	
	function getId(){
		return $this->id;
	}
	
	function getNombre(){
		return $this->nombre;
	}
	
	function setId($id){
		$this->id = $id;
	}
	
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	
	public function getAll(){
		$categorias = $this->db->query("SELECT * FROM categorias;");
		return $categorias;
	}
}