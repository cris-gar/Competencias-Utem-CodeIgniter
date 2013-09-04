<?php
$config=array
(
		/**
		 * Formulario para mandar correo
		*/
		'competencias/contacto'
		=> array(
					
				array('field' => 'nombre',		'label' => 'Nombre',	'rules' => 'required|is_string|xss_clean'),
				array('field' => 'email', 		'label' => 'Email',		'rules' => 'required|valid_email|xss_clean'),
				array('field' => 'asunto',		'label' => 'Asunto', 	'rules' => 'required|is_string|xss_clean'),
				array('field' => 'textarea',	'label' => 'Mensaje',	'rules' => 'required|xss_clean'),
		),
);
