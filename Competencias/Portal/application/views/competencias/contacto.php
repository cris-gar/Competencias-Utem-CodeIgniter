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
	src="<?php echo base_url()?>public/js/jquery-1.4.2.min.js"></script>
</head>
<body>
	<div class="top-bar-wrap">
		<div id="top-bar" class="mod-con">
			<div class="search">
				<input type="text" value="Búsqueda" name="" />
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
					<li><a href="#"><strong>Académicos</strong> </a></li>
					<li><a href="#"><strong>Estadísticas</strong> </a></li>
					<li><a class="cur" href="<?= site_url('competencias/contacto'); ?>"><strong>Contacto</strong>
					</a></li>
				</ul>
			</div>
			<div id="main" class="mod-con">
				<div id="contact-page" class="container clearfix">
					<div class="main-con">
						<div class="title-nav">
							<h2>Contáctenos</h2>
						</div>
						<div class="content">
							<ul id="contact-form">
								<li class="map"><label>Our Location:</label> <iframe width="300"
										height="180" frameborder="0" scrolling="no" marginheight="0"
										marginwidth="0"
										src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Utem+Macul,+%C3%91u%C3%B1oa&amp;aq=4&amp;oq=ute&amp;sll=-33.668298,-70.363372&amp;sspn=1.243517,2.705383&amp;ie=UTF8&amp;hq=&amp;hnear=Utem+Macul&amp;ll=-33.467023,-70.59832&amp;spn=0.009738,0.021136&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
									<small><a
										href="https://maps.google.cl/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Utem+Macul,+%C3%91u%C3%B1oa&amp;aq=4&amp;oq=ute&amp;sll=-33.668298,-70.363372&amp;sspn=1.243517,2.705383&amp;ie=UTF8&amp;hq=&amp;hnear=Utem+Macul&amp;ll=-33.467023,-70.59832&amp;spn=0.009738,0.021136&amp;t=m&amp;z=14"
										style="color: #0000FF; text-align: left">Ver mapa más grande</a>
								</small>
								</li>

								<?php  echo form_open(null); ?>
								<li class="user-info"><label for='nombre'>*Tu nombre:</label> <span
									class="input-wrap"> <?php echo form_error('nombre'); ?> <input
										type="text" autofocus name="nombre"
										value="<?php echo set_value('nombre'); ?>" id="nombre"
										placeholder="Nombre y Apellido" class="flied" />
								</span>
								</li>
								<li class="user-info"><label for='email'>*Dirección de correo:</label>
									<span class="input-wrap"> <?php echo form_error('email'); ?><input
										type="email" name="email"
										value="<?php echo set_value('email'); ?>" placeholder="Email"
										id="email" class="flied" />
								</span>
								</li>
								<li class="user-info"><label for='asunto'>*Asunto:</label> <span
									class="input-wrap"> <?php echo form_error('asunto'); ?> <input
										type="text" name="asunto"
										value="<?php echo set_value('asunto'); ?>"
										placeholder="Asunto" id="asunto" class="flied" />
								</span></li>
								<li><label for="mensaje">*Tu mensaje:</label> <span
									class="input-wrap"> <?php echo form_error('textare'); ?> <textarea
											class="textarea" id="textarea" name="textarea"
											value="<?php echo set_value('textarea'); ?>"
											placeholder="Escriba aquí su mensaje" rows="" cols=""></textarea>
								</span></li>
								<li class="btn-nav"><span class="fl">* Estos son campos
										requeridos</span> <input id="submit" name="submit"
									type="submit" class="submit">Enviar</input></li>
								</form>

							</ul>
						</div>
					</div>
					<div class="sidebar">
						<div id="get-touch">
							<div class="title-nav">
								<h2>Contáctanos</h2>
							</div>
							<div class="con">
								<span class="info"></span>
								<p>
									<img alt=""
										src="<?php echo base_url()?>public/img/phone_ico.png" /><strong>(56
										02) 27877100</strong>
								</p>
								<p>
									<img alt=""
										src="<?php echo base_url()?>public/img/email_ico.png" /><strong>contacto@informatica.utem.cl</strong>
								</p>
								<p>
									<a href="https://twitter.com/utem"><img alt=""
										src="<?php echo base_url()?>public/img/twitter_ico.png" /> </a><strong>@utem,
										#utem</strong>
								</p>
								<p>
									<a
										href="https://www.facebook.com/pages/CEINF-CCEE-Ingenier%C3%ADa-en-Inform%C3%A1tica-UTEM/207108005977332"><img
										alt=""
										src="<?php echo base_url()?>public/img/fscebook_ico.png" /> </a><strong>/utem</strong>
								</p>
							</div>
							<div id="site-navigation">
								<div class="title-nav">
									<h2>Visite</h2>
								</div>
								<div class="con">
									<ul>
										<li><a href="#">Inicio</a></li>
										<!--Acá deberían ir las urls finales del sitio de navegación-->
										<li><a href="#">About Us</a></li>
										<li><a href="#">Nuestros acdémicos</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="siteintro-wrap">
		<div id="siteintro" class="mod-con clearfix"></div>
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
