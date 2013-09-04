<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Competencias extends CI_Controller {


	public function index()
	{
		$this->load->view('competencias/index');
	}

	public function contacto()
	{
		// validar imput mediante codeigniter
		if($this->input->post())
		{
			if ($this->form_validation->run("competencias/contacto"))
			{

				//mandar email mediante codeigniter
				$this->load->library('email');
				$this->email->from($this->input->post('email'),$this->input->post('nombre'));
				$this->email->to('cristian.garrido@ceinf.cl');
				$this->email->subject($this->input->post('asunto'));
				$this->email->message($this->input->post('textarea'));
				$this->email->send();

				//script para decir que el correo se a mandado corectamente
				echo "<script>javascript:alert('correo enviado correctamente'); window.location = 'Contacto'</script>";

			}
		}
		$this->load->view('competencias/contacto');
	}
}
