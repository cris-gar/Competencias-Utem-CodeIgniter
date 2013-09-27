<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index,follow" />
<meta name="keywords" content=" " />
<meta name="description" content=" " />
<title></title>
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
<script type="text/javascript"
	src="<?php echo base_url()?>public/js/funciones.js"></script>
</head>
<body>
	<h1>Agregar Imagen</h1>
	<div id="navegador">
		<ul>
			<li><a href="<?= site_url('academico');?>">Volver Atrás</a>
			</li>

		</ul>
		<!--$ERROR MUESTRA LOS ERRORES QUE PUEDAN HABER AL SUBIR LA IMAGEN-->
		<?=@$error?>
		<section class="container">
			<div class="form">
				<span><?php echo validation_errors(); ?> </span>
				<?=form_open_multipart(null)?>
				<p>
					<label>Título:</label>
				</p>
				<p>
					<input type="text" name="titulo" />
				</p>
				<p>
					<label>Imagen 1:</label>
				</p>
				<p>
					<input type="file" name="userfile" /><br /> <br />
				</p>
				<input type="hidden" name="id" value="<?php echo $id?>" />
				<p>
					<input type="submit" value="Subir imágenes" />
				</p>
				<?=form_close()?>
			</div>

</body>
</html>
