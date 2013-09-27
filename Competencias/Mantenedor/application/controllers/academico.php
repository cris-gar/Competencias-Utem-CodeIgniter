<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Academico extends CI_Controller {


	public function index()
	{
		$datos = $this->academico_model->getAcademico();
		$this->load->view('academico/academico',compact("datos"));
	}

	public function agregar()
	{
		//verifica si los campos son enviados via post
		if($this->input->post())
		{
			//verifica que si se cumple las validaciones
			if ($this->form_validation->run('academico/agregaracademico'))
			{
				//array para tomar los datos del formulario
				$data = array(
							
						'rut' => $this->input->post("rut",true) ,
						'nombre' => $this->input->post("nombre",true),
						'email' => $this->input->post("email",true),
						'telefono' => $this->input->post("telefono",true),
						'genero' => $this->input->post("genero",true),
						'nacionalidad' => $this->input->post("nacionalidad",true),
						'estado_civil' => $this->input->post("estado_civil",true),
						'fecha_nacimiento' => $this->input->post("fecha_nacimiento",true),
						'permiso' => $this->input->post("permiso",true),
						'departamento_id' => $this->input->post("usuario_departamento_id",true),
				);

				// llamado al model para que realize el insert
				$guardar = $this->academico_model->insertar_academico($data);
				if($guardar)
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha agregado el registro exitosamente.');
					redirect('academico',  301);
				}else
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
					redirect('academico/agregar',  301);
				}
			}
		}
		$datos = $this->departamento_model->getDepartamentos();
		$this->load->view('academico/agregar',compact("datos"));
	}

	function imagen($id=null) {
		if($this->input->post())
		{
			//verifica que si se cumple las validaciones
			if ($this->form_validation->run('academico/imagen'))
			{
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2000';
				$config['max_width'] = '2024';
				$config['max_height'] = '2008';

				$this->load->library('upload', $config);
				//SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
				if (!$this->upload->do_upload()) {
					$error = array('error' => $this->upload->display_errors());
				} else {
					//EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS
					//ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
					$file_info = $this->upload->data();
					//USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
					//ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
					$this->_create_thumbnail($file_info['file_name']);
					$data = array('upload_data' => $this->upload->data());
					$titulo = $this->input->post('titulo');
					$imagen = $file_info['file_name'];
					$subir = $this->academico_model->subir($titulo,$imagen,$id);
					if($subir)
					{
						$this->session->set_flashdata('ControllerMessage', 'Se ha agregado el registro exitosamente.');
						redirect('academico',  301);
					}else
					{
						$this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
						redirect('academico/imagen'.$id,  301);
					}
				}
			}
		}
		$this->load->view('academico/imagen',compact("id"));
	}
	//FUNCIÓN PARA CREAR LA MINIATURA A LA MEDIDA QUE LE DIGAMOS
	function _create_thumbnail($filename){
		$config['image_library'] = 'gd2';
		//CARPETA EN LA QUE ESTÁ LA IMAGEN A REDIMENSIONAR
		$config['source_image'] = 'uploads/'.$filename;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		//CARPETA EN LA QUE GUARDAMOS LA MINIATURA
		$config['new_image']='uploads/thumbs/';
		$config['width'] = 150;
		$config['height'] = 150;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
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
			if ($this->form_validation->run('academico/agregaracademico'))
			{
				//array para tomar los datos del formulario
				$data = array(
						'rut' => $this->input->post("rut",true) ,
						'nombre' => $this->input->post("nombre",true),
						'email' => $this->input->post("email",true),
						'telefono' => $this->input->post("telefono",true),
						'genero' => $this->input->post("genero",true),
						'nacionalidad' => $this->input->post("nacionalidad",true),
						'estado_civil' => $this->input->post("estado_civil",true),
						'fecha_nacimiento' => $this->input->post("fecha_nacimiento",true),
						'permiso' => $this->input->post("permiso",true),
						'departamento_id' => $this->input->post("usuario_departamento_id",true),
				);
				// llamado al model para que realize la modificacion
				$guardar = $this->academico_model->modificar_academico($data,$id);
				if($guardar)//verificacion del cumplimiento del model modificar
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha editado el registro exitosamente.');
					redirect('academico',  301);
				}else
				{
					$this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
					redirect('editaracademico'.$id,  301);
				}
			}
		}
		$datosdepartamento = $this->departamento_model->getDepartamentos();
		$datos = $this->academico_model->getAcademicos($id);
		//si el largo del array datos en 0 muestre el error 404
		if(sizeof($datos)==0)
		{
			show_404();
		}
		$this->load->view('academico/editar',compact("id","datos","datosdepartamento"));
	}



	public function delete($id=null)
	{
		if(!$id)
		{
			show_404();
		}
		$guardar = $this->academico_model->eliminar($id);
		if ($guardar)
		{
			$this->session->set_flashdata('ControllerMessage', 'Se ha eliminado el registro exitosamente.');
			redirect('academico',  301);
		}
		else
		{
			$this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
			redirect('academico',  301);
		}
	}
}