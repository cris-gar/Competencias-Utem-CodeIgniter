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
		/**
		 * Formulario para Agregar Facultad
*/
		'facultad/agregarfacultad'
		=> array(

				array('field' => 'facultad', 'label' => 'Nombre Facultad', 'rules' => 'required|is_string|xss_clean'),
		),
		/**
		 * Formulario para agregar Departamento
*/
		'departamento/agregardepartamento'
		=> array(
				array('field' => 'departamento', 'label' => 'Nombre Departamento', 'rules' => 'required|is_string|xss_clean'),
				array('field' => 'departamento_facultad_id',	'label' => 'Nombre Facultad',	'rules' => 'required|xss_clean|validaSelect')
		),
		/**
		 * Formulario para agregar Academicos
*/
		'academico/agregaracademico'
		=> array(
				array('field' => 'rut', 'label' => 'Rut', 'rules' => 'required|is_string|xss_clean'),
				array('field' => 'nombre', 'label' => 'Nombre', 'rules' => 'required|is_string|xss_clean'),
				array('field' => 'email', 'label' => 'Email', 'rules' => 'required|valid_email|xss_clean'),
				array('field' => 'telefono', 'label' => 'Telefono', 'rules' => 'required|is_numeric|xss_clean'),
				array('field' => 'genero', 'label' => 'Genero', 'rules' => 'required|is_string|xss_clean'),
				array('field' => 'nacionalidad', 'label' => 'Nacionalidad', 'rules' => 'required|is_string|xss_clean'),
				array('field' => 'estado_civil', 'label' => 'Estado Civil', 'rules' => 'required|is_string|xss_clean'),
				array('field' => 'fecha_nacimiento', 'label' => 'Fecha Nacimiento', 'rules' => 'required|is_string|xss_clean'),
				array('field' => 'permiso', 'label' => 'Permiso', 'rules' => 'required|numeric|xss_clean'),
				array('field' => 'usuario_departamento_id', 'label' => 'Nombre Departamento', 'rules' => 'required|validaSelect|xss_clean'),
		),

		'academico/imagen'
		=> array(
				array('field'=> 'titulo', 'label' => 'titulo', 'rules'=> 'required|xss_clean'),
		),
);
