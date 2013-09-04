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
</head>

<body>
	<h1>Editar Facultad</h1>
	<div id="navegador">
		<ul>
			<li><a href="<?= site_url('facultad');?>">Volver Atrás</a>
			</li>
		</ul>
		
		<body>
			<section class="container">
				<div class="form">

					<table>
						<br>
						<p>(* Campo requerido)</p>
						<br>

						<?php  echo form_open(null); ?>
						<p>
							<label for='nombre'>*Nombre de la Facultad:</label>
						</p>
						<p>
							<?php echo form_error('facultad'); ?>
							<input type="text" autofocus name="facultad"
								value="<?php echo $datos->facultad?>" id="facultad"
								placeholder="Nombre de Facultad" />
						</p>
						<input type="hidden" name="id" value="<?php echo $id?>" />
						<p>
							<input id="submit" name="submit" type="submit" class="submit"
								value="Enviar"></input>
						</p>

						</form>

						</div>
		
		</body>


		</table>



	</div>

</html>
