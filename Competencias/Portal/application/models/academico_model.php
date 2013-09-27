<?php
class academico_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function getAcademicos($pagina,$porpagina,$quehago)
	{
		switch ($quehago)
		{
			case 'limit':

				$query=$this->db
				->select("u.nombre,u.departamento_id,d.departamento")
				->from("usuarios as u")
				->join('departamentos as d', 'd.departamento_id = u.departamento_id','inner')
				->group_by(array("d.departamento_id", "u.usuario_id"))
				->order_by("usuario_id","asc")
				->limit($porpagina,$pagina)
				->get();
				return $query->result();
				break;

			case 'cuantos':
				$query=$this->db
				->select("u.nombre,u.departamento_id")
				->from("usuarios as u")
				->count_all_results();
                return $query;
				break;
		}
	}
}

