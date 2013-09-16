<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index,follow" />
<meta name="keywords" content=" " />
<meta name="description" content=" " />
<title>Contacto</title>
<link rel="stylesheet"
	href="<?php echo base_url()?>public/css/style.css" type="text/css" />
<script type="text/javascript"
	src="<?php echo base_url()?>public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url()?>public/js/jquery.Rut.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url()?>public/js/jquery.Rut.js"></script>
<script type="text/javascript"
	src="<?php echo base_url()?>public/js/jquery.validate.js"></script>
<script type="text/javascript"
	src="<?php echo base_url()?>public/js/jquery.validate.min.js"></script>
</head>

<body>
	<div class="welcome"></div>
	<div>
		<h1>Sistema de competencias acacemicas</h1>

		<div id="navegador">
			<ul>
				<li><input type="button" onclick="location='<?= site_url('facultad'); ?>'" name="facultad"
					value="Facultad" />
				</li>
				<li><input type="button" onclick="location='<?= site_url('departamento'); ?>'" name="departamento"
					value="Departamento" />
				</li>
				<li><input type="button" onclick="location='<?= site_url('academico'); ?>'" name="academico"
					value="Academico" />
				</li>
				<li><input type="button" onclick="location='#'" name="acceso"
					value="Acceso" />
				</li>
				<li><input type="button" onclick="location='#'" name="logout"
					value="Cerrar Sesion" />
				</li>
			</ul>
		</div>
	</div>
</body>
</html>

