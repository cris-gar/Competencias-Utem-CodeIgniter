<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facultad extends CI_Controller {


	public function index()
	{
		$datos = $this->facultades_model->getFacultades();
		$this->load->view('facultad/facultad',compact("datos"));
	}

	public function agregar()
	{
		//verifica si los campos son enviados via post
		if($this->input->post())
		{
			//verifica que si se cumple las validaciones
			if ($this->form_validation->run('facultad/agregarfacultad'))
			{
				//array para tomar los datos del formulario
				$data = array(
						'facultad' => $this->input->post("facultad",true),
				);
				// llamado al model para que realize el insert
				$guardar = $this->facultades_model->insertar_facultad($data);
				if($guardar)
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha agregado el registro exitosamente.');
					redirect('facultad',  301);
				}else
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
					redirect('agregarfacultad',  301);
				}
			}
		}
		$this->load->view('facultad/agregar');
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
			if ($this->form_validation->run('facultad/agregarfacultad'))
			{
				//array para tomar los datos del formulario
				$data = array(
						'facultad' => $this->input->post("facultad",true),
				);
				// llamado al model para que realize la modificacion
				$guardar = $this->facultades_model->modificar_facultad($data,$id);
				if($guardar)//verificacion del cumplimiento del model modificar
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha editado el registro exitosamente.');
					redirect('facultad',  301);
				}else
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
					redirect('facultad/editar'.$id,  301);
				}
			}
		}
		$datos = $this->facultades_model->getFacultadId($id);
		//si el largo del array datos en 0 muestre el error 404
		if(sizeof($datos)==0)
		{
			show_404();
		}
		$this->load->view('facultad/editar',compact("id","datos"));
	}

	public function delete($id=null)
	{
		if(!$id)
		{
			show_404();
		}
		$guardar = $this->facultades_model->eliminar($id);
		if ($guardar)
		{
			$this->session->set_flashdata('ControllerMessage', 'Se ha eliminado el registro exitosamente.');
			redirect('facultad',  301);
		}
		else
		{
			$this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
			redirect('facultad',  301);
		}
	}
}
