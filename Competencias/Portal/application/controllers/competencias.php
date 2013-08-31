<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Competencias extends CI_Controller {


	public function index()
	{
		$this->load->view('competencias/index');
	}

	public function contacto()
	{
		// validar imput mediante codeigniter
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Tu Nombre', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('asunto', 'Asunto', 'required');
		$this->form_validation->set_rules('textarea', 'Mensaje', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('competencias/contacto');
		}
		else
		{
			//mandar email mediante codeigniter
			$this->load->library('email');
			$this->email->from($this->input->post('email'),$this->input->post('nombre'));
			$this->email->to('cristian.garrido@ceinf.cl');
			$this->email->subject($this->input->post('asunto'));
			$this->email->message($this->input->post('textarea'));
			$this->email->send();

			//script para decir que el correo se a mandado corectamente
			echo "<script>javascript:alert('correo enviado correctamente'); window.location = 'competencias/contacto'</script>";

		}
	}
}
