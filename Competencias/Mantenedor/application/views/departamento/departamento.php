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
	<h1>Departamentos</h1>

	<ul>
		<li><a href="<?= site_url('mantenedor/index');?>">Volver Atrás</a>
		</li>
		<li><a href="<?= site_url('agregardepartamento'); ?>">Agregar</a>
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
			<th>ID</th>
			<th>Departamento</th>
			<th>Facultad</th>
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
			<td><?php echo $datos->departamento_id?></td>
			<td><?php echo $datos->departamento?></td>
			<td><?php echo $datos->facultad?></td>
			<td><a
				href="<?php echo base_url()?>index.php/departamento/editar/<?php echo $datos->departamento_id?>">Editar</a>
				|| <a href="javascript:void(0);"
				onclick="eliminar('<?php echo base_url()?>index.php/departamento/delete/<?php echo $datos->departamento_id?>')">Eliminar</a>
			</td>
		</tr>
		<?php 
	} ?>
		</tr>
	</table>
</body>
</html>
