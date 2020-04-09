@extends('partials.base')

@section('content')	
	<!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="/">Inicio</a>
                        <a href="/Acerca-de-nosotros">Acerca de nosotros</a>
                    </div>
                    <h2>Acerca de nosotros</h2>
                </div>
            </div>
        </div>
    </section>
	<!--================End Home Banner Area =================-->
	
		<!--================ Start service-2 Area =================-->
		<section class="service-area-2 section_gap">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6">
						<div class="service-2-left">
							<div class="get-know">
								{{-- <p class="df-color">Get to Know Project Estimate?</p> --}}
								<h1>¿Quiénes somos?</h1>
								<p>Somos un grupo de abogados especializados en brindar  asesoría jurídica sobre Derecho Laboral, Seguridad Social y consultorías; aportando soluciones seguras y confiables a nuestros clientes sin que desperdicien su tiempo y dinero.</p>
							</div>
							<div class="author-lacture">
								<p>Somos un grupo de profesionales dedicados al asesoramiento y acompañamiento para clientes que estén con dudas en todo lo referente a los derechos y deberes que tenemos en materia de derecho laboral y la seguridad social; brindando seguridad, compromiso, responsabilidad, eficiencia y eficacia.</p>
								<p>Para el año 2020 seremos una firma reconocida por nuestro compromiso con nuestros clientes, los cuales nos hace diferentes; llegando a estar reconocidos a nivel regional. La innovación es tener a nuestros clientes siempre informados paso a paso de sus procesos lo cual nos permite resolver cualquier problema a tiempo, ya que la comunicación será siempre personalizada constantemente.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="service-2-right">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="left-image">
											<div class="s-img"><img class="img-fluid" src="img/service/service4.jpg" alt=""></div>
											<div class="s-img"><img class="img-fluid" src="img/service/service5.jpg" alt=""></div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="right-image">
										<div class="s-img"><img class="img-fluid" src="img/service/service6.jpg" alt=""></div>
										<div class="s-img"><img class="img-fluid" src="img/service/service7.jpg" alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End service-2 Area =================-->

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
<br><br><br><br><br>
					<div class="right-bottom-area">
						<div class="author-lacture">
							<p>La clave de una buena asesoría legal, radica en que la firma brinde un acompañamiento desde el inicio de la empresa. "Galeano Buenaventura" nos ha apoyado desde el comienzo aportando sus conocimientos en el área comercial y laboral, organizando los contratos internos de trabajo, contratos de arrendamiento, reglamentos internos de trabajo, contratos de franquicias...</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
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
	</section><br><br><br>
	<!-- about -->
	<!-- end about -->
	<!--================ End video Area =================-->
	@endsection