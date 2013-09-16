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
<script type="text/javascript">
$(document).ready(function(){
$('#rut').Rut({ 
	  on_error: function(){ alert('Rut incorrecto'); } 
	});
});
</script>
</head>

<body>
	<h1>Agregar Nueva Facultad</h1>
	<div id="navegador">
		<ul>
			<li><a href="<?= site_url('academico');?>">Volver Atrás</a>
			</li>

		</ul>

		<body>
			<section class="container">
				<div class="form">

					<table>
						<br>
						<p>(* Campo requerido)</p>
						<br>

						<?php  echo form_open_multipart(null); ?>
						<p>
							<label for='rut'>*Rut del Usuario:</label>
						</p>
						<p>
							<?php echo form_error('rut'); ?>
							<input type="text" autofocus name="rut"
								value="<?php echo $datos->rut?>" id="rut"
								placeholder="Rut" />
						</p>
						<p>
							<label for='nombre'>*Nombre del Usuario:</label>
						</p>
						<p>
							<?php echo form_error('nombre'); ?>
							<input type="text" autofocus name="nombre"
								value="<?php echo $datos->nombre ?>" id="nombre"
								placeholder="Nombre del Usuario" />
						</p>
						<p>
							<label for='email'>Email:</label>
						</p>
						<p>
							<?php echo form_error('email'); ?>
							<input type="text" autofocus name="email"
								value="<?php echo $datos->email ?>" id="email"
								placeholder="Email" />
						</p>
						<p>
							<label for='telefono'>Telefono:</label>
						</p>
						<p>
							<?php echo form_error('telefono'); ?>
							<input type="text" autofocus name="telefono"
								value="<?php echo $datos->telefono ?>" id="telefono"
								placeholder="Telefono" />
						</p>
						<p>
							<label for='genero'>*Genero:</label>
						</p>
						<p>
							<?php echo form_error('genero'); ?>
							<input type="text" autofocus name="genero"
								value="<?php echo $datos->genero ?>" id="Genero"
								placeholder="M(maculino) F(femenino)" maxlength="1" />
						</p>
						<p>
							<label for='nacionalidad'>*Nacionalidad:</label>
						</p>
						<p>
							<?php echo form_error('nacionalidad'); ?>
							<input type="text" autofocus name="nacionalidad"
								value="<?php echo $datos->nacionalidad ?>"
								id="nacionalidad" placeholder="Nacionalidad" />
						</p>
						<p>
							<label for='estado_civil'>*Estado Civil:</label>
						</p>
						<p>
							<?php echo form_error('estado_civil'); ?>
							<input type="text" autofocus name="estado_civil"
								value="<?php echo $datos->estado_civil ?>"
								id="estado_civil" placeholder="Estado_civil" />
						</p>
						<p>
							<label for='fecha_nacimiento'>*Fecha Nacimiento:</label>
						</p>
						<p>
							<?php echo form_error('fecha_nacimiento'); ?>
							<input type="text" autofocus name="fecha_nacimiento"
								value="<?php echo $datos->fecha_nacimiento ?>"
								id="fecha_nacimiento" placeholder="Dia-Mes-Año" />
						</p>
						<p>
							<label for='permiso'>*Permiso:</label>
						</p>
						<p>
							<?php echo form_error('permiso'); ?>
							<input type="text" autofocus name="permiso"
								value="<?php if($datos->permiso=="f") echo "0"; else echo "1";?>" id="permiso"
								placeholder="Permiso 0 no 1 si" />
						</p>
						<p>
							<label for='facultad'>*Nombre del Departamento:</label>
						</p>
						<p>
							<?php echo form_error('usuario_departamento_id'); ?>
							<select name="usuario_departamento_id">
								<option value="">Seleccione un departamento</option>
								<?php foreach ($datosdepartamento as $datosdepartamento)
								{
									?>
								<option value="<?php echo $datosdepartamento->departamento_id?>"><?php echo $datosdepartamento->departamento?></option>
								<?php }?>
							</select>
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
