<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departamento extends CI_Controller {


	public function index()
	{
		$datos = $this->departamento_model->getDepartamentos();
		$this->load->view('departamento/departamento',compact("datos"));
	}

	public function agregar()
	{
		//verifica si los campos son enviados via post
		if($this->input->post())
		{
			//verifica que si se cumple las validaciones
			if ($this->form_validation->run('departamento/agregardepartamento'))
			{
				//array para tomar los datos del formulario
				$data = array(
						'departamento' => $this->input->post("departamento",true),
						'facultad_id' => $this->input->post("departamento_facultad_id",true),
				);
				// llamado al model para que realize el insert
				$guardar = $this->departamento_model->insertar_departamento($data);
				if($guardar)
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha agregado el registro exitosamente.');
					redirect('departamento',  301);
				}else
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
					redirect('agregardepartamento',  301);
				}
			}
		}
		$datos = $this->facultades_model->getFacultades();
		$this->load->view('departamento/agregar',compact("datos"));
	}
	public function editar($id=null)
	{
		if (!$id)
		{
			show_404();
		}
		if($this->input->post())
		{
			//verifica que si se cumple las validaciones
			if ($this->form_validation->run('departamento/agregardepartamento'))
			{
				//array para tomar los datos del formulario
				$data = array(
						'departamento' => $this->input->post("departamento",true),
						'facultad_id' => $this->input->post("departamento_facultad_id",true),
				);
				// llamado al model para que realize la modificacion
				$guardar = $this->departamento_model->modificar_departamento($data,$id);
				if($guardar)//verificacion del cumplimiento del model modificar
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha editado el registro exitosamente.');
					redirect('departamento',  301);
				}else
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
					redirect('departamento/editar'.$id,  301);
				}
			}
		}
		$datosfacultad = $this->facultades_model->getFacultades();
		$datos = $this->departamento_model->getDepartamento($id);
		//si el largo del array datos en 0 muestre el error 404
		if(sizeof($datos)==0)
		{
			show_404();
		}
		$this->load->view('departamento/editar',compact("id","datos","datosfacultad"));
	}
	public function delete($id=null)
	{
		if(!$id)
		{
			show_404();
		}
		$guardar = $this->departamento_model->eliminar($id);
		if ($guardar)
		{
			$this->session->set_flashdata('ControllerMessage', 'Se ha eliminado el registro exitosamente.');
			redirect('departamento',  301);
		}
		else
		{
			$this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
			redirect('departamento',  301);
		}
	}
}
