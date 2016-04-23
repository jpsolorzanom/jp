@extends('layout')
@section('content')
  <!-- banner area starts here -->
	<section class="banner text-center" id="sec1">
		<div class="container">
			<div class="row">
				<h3>Software</h3>

				<h1>JP</h1>

				<p>Programación de sistemas</p>

				<img src="img/pin.png" alt=""><br>

				<button class="know-more">KNOW MORE</button>
			</div>
		</div>
	</section><!-- end of banner section -->

	<!-- about section -->
	<section class="about text-center" id="sec2">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 about-heading">
					<h2>
						ACERCA DE
					</h2>
					<img src="img/daag.png" alt="">

					<p><span>JP</span> proporciona un servicio de consultoria y <span>programación de sistemas</span>,
						que permite completes tus proyectos informaticos y tecnologicos para tu <span>modelo de negocio</span>.
						Desarrollando e integrando herramientas, proveedores y servicios necesarios que permitan
						entregar la mejor solución al <span>cliente</span>.
					</p>
				</div>

				<div class="col-md-3 single-about col-xs-6 col-sm-4">
					<div class="about-inside">
						<i class="fa fa-lightbulb-o"></i>
						<h3>Creatividad</h3>
						<p>soluciones creativas a las necesidades de tu modelo de negocio.</p>
					</div>
				</div>

				<div class="col-md-3 single-about col-xs-6 col-sm-4">
					<div class="about-inside">
						<i class="fa fa-pencil"></i>
						<h3></h3>
						<p>.</p>
					</div>
				</div>

				<div class="col-md-3 single-about col-xs-6 col-sm-4">
					<div class="about-inside">
						<i class="fa fa-cog"></i>
						<h3>Optimización</h3>
						<p>ahorrar tiempo, insumos, costos y recursos humanos en los procesos de tu modelo.</p>
					</div>
				</div>

				<div class="col-md-3 single-about col-xs-6 col-sm-4">
					<div class="about-inside">
						<i class="fa fa-laptop"></i>
						<h3></h3>
						<p>.</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->

	<!-- service section -->

	<section class="service text-left" id="sec3">
		<div class="container">
			<div class="row">
				<div class="service-overlay"></div>
					<div class="col-md-12">
						<h2>SERVICIOS</h2>
						<img src="img/daag.png" alt="">

						<p>Servicios que permiten <br>
						<br>
							concentrarte en los objetivos de tu negocio.</p>
					</div>
					<div class="col-md-12 services">
						<div class="col-md-2 single-service col-xs-6 col-sm-3">
							<i class="fa fa-tachometer"></i>
							<h3>Desarrollo</h3>
							<p>Programación en distintos lenguajes, plataformas y tecnologias, la que mejor se adecuen a tu
								proyecto.</p>
						</div>

						<div class="col-md-2 col-md-push-1 single-service col-xs-6 col-sm-3">
							<i class="fa fa-search"></i>
							<h3>Webmaster</h3>
							<p>Creación, administración, mantenimiento y programación de tu sitio web.</p>
						</div>
					</div>

					<div class="col-md-12  services bottom-services">

						<div class="col-md-2 single-service col-sm-3 col-xs-6">
							<i class="fa fa-stack-overflow"></i>
							<h3>Consultoria</h3>
							<p>Inmersión en tu modelo de negocio; para proyectar una solución informatica.</p>
						</div>

						<div class="col-md-2 col-md-push-1 single-service col-sm-3 col-xs-6">
							<i class="fa fa-bar-chart"></i>
							<h3>Soporte</h3>
							<p>Soporte técnico a los sitemas informaticos y para usuarios finales.</p>
						</div>
					</div>
			</div>
		</div>
	</section><!-- about section ends -->

	<!-- portfolio section -->

	<section class="portfolio text-center" id="sec4">
		<div class="row portfolio-row">
			<div class="portfolio-heading">
				<h2>PROYECTOS</h2>
				<img src="img/daag.png" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <br><br>
				ut labore et dolore magna aliqua.</p>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
					<img class="img-responsive" src="img/portfolio.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Fresnal Comala</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
				<a href="img/portfolio.jpg"><i class="fa fa-search"></i></a>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
					<img class="img-responsive" src="img/portfolio2.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Ocean Pool</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
				<a href="img/portfolio2.jpg"><i class="fa fa-search"></i></a>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
					<img class="img-responsive" src="img/portfolio3.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>SUMINCOL</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
				<a href="img/portfolio3.jpg"><i class="fa fa-search"></i></a>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
					<img class="img-responsive" src="img/portfolio4.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Title goes here</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
				<a href="img/portfolio4.jpg"><i class="fa fa-search"></i></a>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
					<img class="img-responsive" src="img/portfolio5.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Title goes here</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
				<a href="img/portfolio5.jpg"><i class="fa fa-search"></i></a>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
					<img class="img-responsive" src="img/portfolio6.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Title goes here</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
				<a href="img/portfolio6.jpg"><i class="fa fa-search"></i></a>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
					<img class="img-responsive" src="img/portfolio7.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Title goes here</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
				<a href="img/portfolio7.jpg"><i class="fa fa-search"></i></a>
			</div>

			<div class="col-md-3 single-portfolio col-sm-6">
				<figure class="portfolio-item">
					<img class="img-responsive" src="img/portfolio8.jpg" alt="">
					<figcaption class="portfolio-details">
						<h4>Title goes here</h4>
						<p>onsectetur adipisicing elit, sedo eiusmod tempor incidi
						et dolorerserss eerhfre mag.</p>
					</figcaption>
				</figure>
				<a href="img/portfolio8.jpg"><i class="fa fa-search"></i></a>
			</div>
		</div>
	</section><!-- end of portfolio section -->

	<section class="contact text-center" id="sec5">
		<div class="container">
			<div class="row">
				<article class="contact-heading">
					<h2>CONTACTO</h2>
					<img src="img/daag.png" alt="">
					<p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            <br> ut labore et dolore magna aliqua.
          </p>
				</article>
			</div>
		</div>
	</section><!-- end of contact section -->

	<section class="contact-form">
		<div class="container">
			<div class="row">
				<div class="form">
						<form method="post">
							<div class="sbtn col-md-12 text-center">
                {!! csrf_field() !!}
								<input class="name form-input" type="text" placeholder="NOMBRE">
								<input class="email form-input" type="email" placeholder="CORREO">
								<input class="message form-input" type="text" placeholder="MENSAJE">
								<input  class="submit-btn" type="submit">
							</div>
						</form>
				</div>
			</div>
		</div>
	</section>
@endsection
