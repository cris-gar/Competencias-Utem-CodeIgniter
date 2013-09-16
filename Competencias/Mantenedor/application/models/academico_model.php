<?php
class academico_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function getAcademico()
	{
		$query=$this->db
		->select("u.usuario_id,u.rut,u.nombre,u.permiso,u.email,u.telefono,u.genero,u.nacionalidad,u.estado_civil,u.fecha_nacimiento,u.departamento_id,u.fecha_actualizacion,d.departamento")
		->from("usuarios as u")
		->join('departamentos as d', 'd.departamento_id = u.departamento_id','inner')
		->group_by(array("d.departamento_id", "u.usuario_id"))
		->order_by("usuario_id","asc")
		->get();
		return $query->result();
	}

	public function insertar_academico($datos=array())
	{
		$this->db->insert("usuarios",$datos);
		return true;
	}

	public function subir($titulo,$imagen,$id)
	{
		$dato=array(
				'titulo' => $titulo,
				'ruta' => $imagen,
				'usuario_fk' => $id
		);
		$this->db->insert('imagen', $dato);
		return true;
	}
	public function getAcademicos($id)
	{
		$where = array("usuario_id" => $id);
		$query = $this->db
		->select("*")
		->from("usuarios")
		->where($where)
		->get();
		return $query->row();
	}

	public function modificar_academico($datos=array(),$id){
		$this->db->where("usuario_id", $id);
		$this->db->update("usuarios", $datos);
		return true;
	}

	public function eliminar($id)
	{
		$this->db->delete("usuarios", array("usuario_id" => $id));
		return true;
	}
}

