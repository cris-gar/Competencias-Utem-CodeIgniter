<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index,follow" />
<meta name="keywords" content=" " />
<meta name="description" content=" " />
<title>Inicio</title>
<link rel="stylesheet"
	href="<?php echo base_url()?>public/css/style.css" type="text/css" />
<script type="text/javascript"
	src="<?php echo base_url()?>public/js/jquery-1.4.2.min.js"></script>
</head>
<body>

	<div class="top-bar-wrap">
		<div id="top-bar" class="mod-con">
			<div class="search">
				<input type="text" value="Search Keywords" name="" />
				<button type="submit" class="btn">OK</button>
			</div>
			<div class="rft">
				<a
					href="https://www.facebook.com/pages/CEINF-CCEE-Ingenier%C3%ADa-en-Inform%C3%A1tica-UTEM/207108005977332"
					class="facebook"></a><a href="https://twitter.com/utem"
					class="twitter"></a>
			</div>
		</div>
	</div>
	<div class="main-bg">
		<div id="home-page" class="main-wrap">
			<div id="header" class="mod-con">
				<ul id="main-menu">
					<li><a class="cur" href="<?= site_url('Inicio'); ?>"><strong>Inicio</strong> </a>
					</li>
					<li><a href="<?= site_url('Academicos'); ?>"><strong>Académicos</strong> </a></li>
					<li><a href="#"><strong>Estadísticas</strong> </a></li>
					<li><a href="<?= site_url('Contacto'); ?>"><strong>Contacto</strong>
					</a></li>
				</ul>
			</div>
			<div id="main" class="mod-con">
				<ul id="home-con" class="clearfix">
					<li class="about">
						<div class="title-nav">
							<h2>Misión y Visión</h2>
						</div>
						<div class="con"
							overflow:scroll; style="height: 280px; width: 250x; overflow: auto; border-radius: 15px 15px 15px 15px;">
							<p>La Universidad Tecnológica Metropolitana, es una Institución
								de Educación superior estatal y autónoma socialmente
								responsable, ubicada en la Región Metropolitana, y tiene como
								Misión: Formar personas con altas capacidades académicas y
								profesionales, en el ámbito preferentemente tecnológico, apoyada
								en la generación, transferencia, aplicación y difusión del
								conocimiento en las áreas del saber que le son propias, para
								contribuir al desarrollo sustentable del país y de la sociedad
								de la que forma parte.</p>
							<p>La Universidad Tecnológica Metropolitana, será reconocida por
								la formación de sus egresados, la calidad de su educación
								continua, por la construcción de capacidades de investigación y
								creación, innovación y transferencia en algunas áreas del saber,
								por la equidad social en su acceso, su tolerancia y pluralismo,
								por su cuerpo académico de excelencia y por una gestión
								institucional que asegura su sustentabilidad y la práctica de
								mecanismos de aseguramiento de la calidad en todo su quehacer.</p>
						</div>
					</li>
					<li class="blog">
						<div class="title-nav">
							<h2>Twitter</h2>
						</div>
						<div class="con">
							<a class="twitter-timeline"
								href="https://twitter.com/search?q=%23utem"
								data-widget-id="367512545294155777">Tweets sobre "#utem"</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</li>
					<li class="contact">
						<div class="title-nav">
							<h2>Contáctanos</h2>
						</div>
						<div class="con">
							<p>
								<img alt=""
									src="<?php echo base_url()?>public/img/phone_ico.png" /> <strong>Fono</strong>
								(56 02) 27877100
							</p>
							<p>
								<img alt=""
									src="<?php echo base_url()?>public/img/email_ico.png" /><strong>E-mail:</strong>contacto@informatica.utem.cl
							</p>
							<p>
								<a href="https://twitter.com/utem"><img alt=""
									src="<?php echo base_url()?>public/img/twitter_ico.png" /> </a><strong>Twitter</strong>@utem,
								#utem
							</p>
							<p>
								<a
									href="https://www.facebook.com/pages/CEINF-CCEE-Ingenier%C3%ADa-en-Inform%C3%A1tica-UTEM/207108005977332"><img
									alt=""
									src="<?php echo base_url()?>public/img/fscebook_ico.png" /> </a><strong>/utem</strong>
							</p>
						</div>
					</li>
				</ul>
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
