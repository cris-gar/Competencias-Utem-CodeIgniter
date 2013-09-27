<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index,follow" />
<meta name="keywords" content=" " />
<meta name="description" content=" " />
<title>Academicos</title>
<link rel="stylesheet"
	href="<?php echo base_url()?>public/css/style.css" type="text/css" />
<link rel="stylesheet"
	href="<?php echo base_url()?>public/css/widget_style.css"
	type="text/css" />
<script type="text/javascript"
	src="<?php echo base_url()?>public/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url()?>public/js/widgets.js"></script>
</head>
<body>
	<div class="top-bar-wrap">
		<div id="top-bar" class="mod-con">
			<div class="search">
				<input type="text" value="Search Keywords" name="" />
				<button type="submit" class="btn">OK</button>
			</div>
		</div>
	</div>
	<div class="main-bg">
		<div id="sub-page" class="main-wrap">
			<div id="header" class="mod-con">
				<ul id="main-menu">
					<li><a href="<?= site_url('Inicio'); ?>"><strong>Inicio</strong> </a>
					</li>
					<li><a class="cur"
						href="<?= site_url('pagination/pagination'); ?>"><strong>Académicos</strong>
					</a></li>
					<li><a href="#"><strong>Estadísticas</strong> </a></li>
					<li><a href="<?= site_url('Contacto'); ?>"><strong>Contacto</strong>
					</a></li>
				</ul>
			</div>
			<div id="main" class="mod-con">
				<div id="portfolio-page" class="container">
					<div class="main-con">
						<div class="title-nav">
							<h2>Académicos</h2>
						</div>
						<ul class="portfolio-list clearfix">
							<ul id="sortable" class="teacher_list">
								<!--Esto se reaalizara si existe usuarios en la BD-->
								<?php 
								if (count ($datos)<=0)
								{
									echo '<script language="javascript" type="text/javascript">
									alert("No existen datos");
									</script>';
								}
								else{

									foreach ($datos as $datos) { ?>
								<!--Se recorre la consulta para todos los usuarios-->
								<li><script type="text/javascript">
                        			var p = new Profesor_widget({
                            		"name" :  "<?php echo $datos->nombre ;?>",
                            		"depto" : "<?php echo $datos->departamento;?>",
                            		"img_url": "<?php echo base_url()?>uploads/thumbs/<?echo $datos->ruta;?>"
                        });
                        document.write(p.template)
                    </script>
								</li>
								<?php }
}?>
							</ul>
						</ul>
					</div>
					<div class="form-actions">
						<? print_r($data);?>
						<?php ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="footer-wrap">
		<div id="footer" class="mod-con">
			<div class="copyright">&copy; 2010 Copyright iPadMasters Theme. All
				Rights Reserved.</div>
			<div class="links">
				<a href="#">Log in</a> | <a href="#">Contact Us</a>
			</div>
		</div>
	</div>
</body>
</html>
