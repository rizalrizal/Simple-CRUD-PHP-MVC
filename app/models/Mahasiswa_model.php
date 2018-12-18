<?php 
/**
* 
*/
class Mahasiswa_model
{
	private $table = "tbl_mhs";
	private $db;
	
	public function __construct()
	{
		$this->db = new Database();
	}
	
	public function getAllMhs()
	{
		$this->db->query("select * from ".$this->table);
		return $this->db->resultSet();
	}

	public function getMhsById($id)
	{
		$this->db->query("select * from ".$this->table ." where id=:id");
		$this->db->bind("id",$id);
		return $this->db->resultSingle();
	}
}

 ?>