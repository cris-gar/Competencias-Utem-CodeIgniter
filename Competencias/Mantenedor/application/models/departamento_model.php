<?php
class departamento_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function getDepartamentos()
	{
		$query=$this->db
		->select("d.departamento_id,d.departamento,f.facultad")
		->from("departamentos as d")
		->join('facultades as f', 'f.facultad_id = d.facultad_id','inner')
		->group_by(array("f.facultad_id", "d.departamento_id"))
		->order_by("departamento_id","asc")
		->get();
		return $query->result();
	}

	public function insertar_departamento($datos=array())
	{
		$this->db->insert("departamentos",$datos);
		return true;
	}

	public function getDepartamento($id)
	{
		$where = array("departamento_id" => $id);
		$query = $this->db
		->select("departamento_id,departamento")
		->from("departamentos")
		->where($where)
		->get();
		return $query->row();
	}

	public function modificar_departamento($datos=array(),$id){
		$this->db->where("departamento_id", $id);
		$this->db->update("departamentos", $datos);
		return true;
	}
	
	 public function eliminar($id)
	 {
	$this->db->delete("departamentos", array("departamento_id" => $id));
	return true;
	}
}

