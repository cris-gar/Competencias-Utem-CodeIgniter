<?php
class facultades_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function getFacultades()
	{
		$query=$this->db
		->select("facultad_id,facultad")
		->from("facultades")
		->order_by("facultad_id","asc")
		->get();
		return $query->result();
	}

	public function insertar_facultad($datos=array())
	{
		$this->db->insert("facultades",$datos);
		return true;
	}

	public function getFacultadId($id)
	{
		$where = array("facultad_id"=>$id);
		$query = $this->db
		->select("facultad_id,facultad")
		->from("facultades")
		->where($where)
		->get();
		return $query->row();
	}

	public function modificar_facultad($datos=array(),$id){
		$this->db->where("facultad_id",$id);
		$this->db->update("facultades",$datos);
		return true;
	}
	
	public function eliminar($id)
	{
		$this->db->delete("facultades", array("facultad_id" => $id));
		return true;
	}
}

