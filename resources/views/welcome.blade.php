@extends('partials.base')

@section('content')
	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area overlay">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content">
						<h2>
							Nosotros combinamos<br>
							Negocios con finanzas<br>
						</h2>
						<p>
							{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua. --}}
						</p>
						<a class="primary-btn text-uppercase" href="#">Get Free Quote</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
	

	<!--================ Start Video Area =================-->
	<section class="video-sec-area section_gap_top" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 video-left overlay">
					{{-- <div class="video-inner justify-content-center align-items-center d-flex">
						<a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?time_continue=2&v=J9YzcEe29d0">
							<span></span>
						</a>
					</div> --}}
				</div>
				<div class="col-lg-6 video-right">
					<h1>Un equipo de experto</h1>
					<p>Somos un grupo de abogados especialistas en la área del derecho laboral, damos en asesoría jurídica en las áreas de Derecho Laboral individual, Derecho laboral colectivo y Seguridad Social; aportando soluciones seguras y confiables a nuestros clientes sin que desperdicien su tiempo y dinero.</p>
					<a href="/Acerca-de-nosotros" class="primary-btn">Leer mas</a>

					<div class="right-bottom-area">
						<div class="author-lacture">
							<p>La clave de una buena asesoría legal, radica en que la firma brinde un acompañamiento desde el inicio de la empresa. "Galeano Buenaventura" nos ha apoyado desde el comienzo aportando sus conocimientos en el área comercial y laboral, organizando los contratos internos de trabajo, contratos de arrendamiento, reglamentos internos de trabajo, contratos de franquicias...</p>
							<div class="author-title">
								<div class="thumb"><img src="img/about-author.png" alt=""></div>
								<div class="a-desc">
									<h6>Marvel Maison</h6>
									<p>Chief Executive, Amazon</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about -->
	<section class="about-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about-inner">
						<div class="row">
							<!-- single success -->
							<div class="col-lg-6 col-md-6">
								<div class="single-success">
									<h5>Consultoría jurídica</h5>
									<p>Dirigido a personas naturales que requieran de respuestas fundamentadas en estrategias y acciones especializadas.</p>
								</div>
							</div>
							<!-- single success -->
							<div class="col-lg-6 col-md-6">
								<div class="single-success">
									<h5>Representación jurídica</h5>
									<p>Dirigido a personas naturales y jurídicas que precisen defender sus intereses y derechos ante los Estrados judiciales y/o Entidades estatales.</p>
								</div>
							</div>
							<!-- single success -->
							<div class="col-lg-6 col-md-6">
								<div class="single-success">
									<h5>Asesoría legal empresarial</h5>
									<p>Se especializa en la constitución, manejo, administración del sector laboral, y gestión humana para el sector privado.</p>
								</div>
							</div>
							<!-- single success -->
							<div class="col-lg-6 col-md-6">
								<div class="single-success">
									<h5>Asesoría en derecho laboral</h5>
									<p>Elaboración de contratos, elaboración de sistemas de gestión de la propiedad intelectual en el trabajo y elaboración de reglamentos internos de trabajo.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end about -->
	<!--================ End video Area =================-->

	<!--================ Start Blog Area =================-->
	<section class="section_gap blog_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h2>Lo último de nuestras publicaciones del blog</h2>
						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
							aliqua enim minim veniam quis nostrud.</p> --}}
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<!-- single-blog -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="img/blog/h-blog1.jpg" alt="">
						</div>
						<div class="blog-details">
							<div class="blog-meta">
								<span>25 june, 2018 | By Mark Wiens</span>
							</div>
							<h5><a href="#">Addiction When Gambling <br>
									Becomes A Problem</a></h5>
							<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in
								front of their desktops.</p>
						</div>
					</div>
				</div>
				<!-- single-blog -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="img/blog/h-blog2.jpg" alt="">
						</div>
						<div class="blog-details">
							<div class="blog-meta">
								<span>25 june, 2018 | By Mark Wiens</span>
							</div>
							<h5><a href="#">Addiction When Gambling <br>
									Becomes A Problem</a></h5>
							<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in
								front of their desktops.</p>
						</div>
					</div>
				</div>
				<!-- single-blog -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="img/blog/h-blog3.jpg" alt="">
						</div>
						<div class="blog-details">
							<div class="blog-meta">
								<span>25 june, 2018 | By Mark Wiens</span>
							</div>
							<h5><a href="#">Addiction When Gambling <br>
									Becomes A Problem</a></h5>
							<p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in
								front of their desktops.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Blog Area =================-->


	<!--================ Start Team Area =================-->
	<section class="section_gap team-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h2>Nuestro Equipo</h2>
						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna
							aliqua enim minim veniam quis nostrud.</p> --}}
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<!-- single-team-member -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img class="img-fluid" src="img/team/team1.jpg" alt="">
						</div>
						<div class="author_decs">
							<h5>Ethel Davis</h5>
							<p class="profession">Senior Barrister at law</p>
						</div>
					</div>
				</div>
				<!-- single-team-member -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img class="img-fluid" src="img/team/team2.jpg" alt="">
						</div>
						<div class="author_decs">
							<h5>Ethel Davis</h5>
							<p class="profession">Senior Barrister at law</p>
						</div>
					</div>
				</div>
				<!-- single-team-member -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img class="img-fluid" src="img/team/team3.jpg" alt="">
						</div>
						<div class="author_decs">
							<h5>Ethel Davis</h5>
							<p class="profession">Senior Barrister at law</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Team Area =================-->

	<!--================ Start CTA Area =================-->
	<div class="cta-area section_gap overlay">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<h1>¿Quiere obtener un estimado del proyecto?</h1>
					<p>Hay un momento en la vida de cualquier aspirante a astrónomo en el que es hora de comprar ese primer telescopio. Es emocionante pensar en configurar su propia estación de visualización si está en la cubierta</p>
					<a href="#" class="primary-btn">Obtener cotizacion gratis</a>
				</div>
			</div>
		</div>
	</div>
	<!--================ End CTA Area =================-->
@endsection