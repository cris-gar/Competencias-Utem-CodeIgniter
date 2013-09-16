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
	<h1>Academicos</h1>

	<ul>
		<li><a href="<?= site_url('mantenedor/index');?>">Volver Atrás</a>
		</li>
		<li><a href="<?= site_url('agregaracademico');?>">Agregar</a>
		</li>
	</ul>
	<?php 
	if ( $this->session->flashdata('ControllerMessage') != '' )
	{
		?>
	<p style="color: red;">
		<?php echo $this->session->flashdata('ControllerMessage'); ?>
	</p>
	<?php 
	}
	?>
	<table>
		<tr style="background-color: #000; color: #fff;">
			<th>Rut</th>
			<th>Nombre</th>
			<th>Permiso</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Genero</th>
			<th>Nacionalidad</th>
			<th>Estado Civil</th>
			<th>Fecha Nacimiento</th>
			<th>Departamento</th>
			<th>Acciones</th>
		</tr>
		<?php 
		if (count ($datos)<=0)
			echo '<script language="javascript" type="text/javascript">
			alert("No existen datos");
			</script>';
		else
			foreach ($datos as $datos)
			{
				?>
		<tr style="background-color: #f0f0f0;">
			<td><?php echo $datos->rut?></td>
			<td><?php echo $datos->nombre?></td>
			<td><?php if ($datos->permiso == "f")
				echo "0"; else echo "1";?></td>
			<td><?php echo $datos->email?></td>
			<td><?php echo $datos->telefono?></td>
			<td><?php echo $datos->genero?></td>
			<td><?php echo $datos->nacionalidad?></td>
			<td><?php echo $datos->estado_civil?></td>
			<td><?php echo $datos->fecha_nacimiento?></td>
			<td><?php echo $datos->departamento?></td>
			<td><a
				href="<?php echo base_url()?>index.php/academico/editar/<?php echo $datos->usuario_id?>">Editar</a>
				|| <a href="javascript:void(0);"
				onclick="eliminar('<?php echo base_url()?>index.php/academico/delete/<?php echo $datos->usuario_id?>')">Eliminar</a>
				|| <a
				href="<?php echo base_url()?>index.php/academico/imagen/<?php echo $datos->usuario_id?>">Agregar
					Imagen</a>
			</td>
		</tr>
		<?php 
	} ?>
		</tr>
	</table>
</body>
</html>
