<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Competencias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

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
				echo "<script>javascript:alert('correo enviado correctamente'); window.location = 'Portal/index.php/Contacto'</script>";

			}
		}
		$this->load->view('competencias/contacto');
	}

	public function academico()
	{
		/**
			creamos el codigo de la paginacion
		 */
		$this->load->library('pagination');
		if($this->uri->segment(3))
		{
			$pagina = $this->uri->segment(3);
		}else
		{
			$pagina=0;
		}
		$porpagina=6;
		$datos['datos'] = $this->academico_model->getAcademicos($pagina,$porpagina,"limit");
		$datos['cuantos'] = $this->academico_model->getAcademicos($pagina,$porpagina,"cuantos");
		$config['base_url'] = base_url().'index.php/competencias/academico';
		$config['total_rows'] = $datos['cuantos'];
		$config['per_page'] = $porpagina;
		$config['uri_segment'] = '3';
		$config['num_links'] = '4';
		$config['first_link'] = 'Primero';
		$config['next_link'] = 'Siguiente';
		$config['prev_link'] = 'Anterior';
		$config['last_link'] = 'Ultimo';
		$this->pagination->initialize($config);
		$datos['links'] = $this->pagination->create_links();
		$this->load->view('competencias/academico',$datos);
	}
}
