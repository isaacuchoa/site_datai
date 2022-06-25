<!DOCTYPE HTML>

<html>
	<head>
		<title>datai | solutions</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="images/favicon.ico" rel="icon">
		<link href="src/css/bootstrap.min.css" rel="stylesheet"/>
		<script src="src/js/bootstrap.bundle.min.js"></script>
		
		 <!-- Recaptcha -->
 		 <script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">							
							<h1 id="title"><img src="images/logo.png"/></h1>							
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-home">Home</span></a></li>
								<li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-th">Portfólio</span></a></li>								
								<li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Contato</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" target="_blank" class="icon brands fa-github"><span class="label">Github</span></a></li>							
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="">
						
						<!-- Carousel -->
								<div id="demo" class="carousel slide" data-bs-ride="carousel">

								  <!-- Indicators/dots -->
								  <div class="carousel-indicators">
								    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
								    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
								    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
								  </div>

								  <!-- The slideshow/carousel -->
								  <div class="carousel-inner">
								    <div class="carousel-item active">
								      <img src="images/banner.png" alt="banner" class="d-block w-100">
								    </div>
								    <div class="carousel-item">
								      <img src="images/banner1.png" alt="banner" class="d-block w-100">
								    </div>
								    <div class="carousel-item">
								      <img src="images/banner2.png" alt="banner" class="d-block w-100">
								    </div>
								  </div>

								
								</div>
						
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2 class="colorBI">Portfólio</h2>
							</header>

							<p>Dados & Informações</p>

							<div class="row">

							<div class="card col-lg-3 ml-auto" style="">
							  <img src="images/pic02.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							     <p class="card-text">Projeto de Power BI</p>
							     <a href="#" class="btn btn-primary">Visitar</a>							    
							  </div>
							</div>

							<div class="card col-lg-3 ml-auto" style="">
							  <img src="images/pic03.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							     <p class="card-text">Projeto de Power BI</p>
							     <a href="#" class="btn btn-primary">Visitar</a>							   
							  </div>
							</div>


							<div class="card col-lg-3 ml-auto" style="">
							  <img src="images/pic04.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <p class="card-text">Projeto de Power BI</p>
							     <a href="#" class="btn btn-primary">Visitar</a>							   
							  </div>
							</div>


							<div class="card col-lg-3 ml-auto" style="">
							  <img src="images/pic05.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							     <p class="card-text">Projeto de Power BI</p>
							     <a href="#" class="btn btn-primary">Visitar</a>							   
							  </div>
							</div>
							
							</div>

						</div>
					</section>
				

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2 class="colorBI">Fale Conosco</h2>
							</header>

							

							<form method="post" action="sendEmail.php">
								<div class="row">
									<div class="col-6 col-12-mobile"><input type="text" name="nome" autocomplete="no" placeholder="Nome" required="true" /></div>
									<div class="col-6 col-12-mobile"><input type="text" name="email" autocomplete="no" placeholder="Email" required="true" /></div>
									<div class="col-12 col-12-mobile"><input type="text" name="assunto" autocomplete="no" placeholder="Assunto" required="true" /></div>
									<div class="col-12">
										<textarea name="mensagem" placeholder="Sua mensagem" autocomplete="no" required="true"></textarea>
									</div>
									  <div class="g-recaptcha" data-sitekey=""></div>
									<div class="col-12">
										<input type="submit" value="Enviar" />
									</div>
								</div>
							</form>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; datai.com.br</li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
