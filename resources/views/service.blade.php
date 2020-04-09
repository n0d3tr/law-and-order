@extends('partials.base')

@section('content')
	
    <!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="/">Inicio</a>
                        <a href="/Servicios">Servicios</a>
                    </div>
                    <h2>Nuestros servicios</h2>
                </div>
            </div>
        </div>
    </section>
	<!--================End Home Banner Area =================-->
	<!--================ Start service Area =================-->
	<section class="service-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h1>Servicios ofrecidos por nosotros</h1>
						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore dolore magna --}}
							{{-- aliqua enim minim veniam quis nostrud.</p> --}}
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<!-- single service -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-service">
						<div class="service-thumb">
							<img class="img-fluid" src="img/service/service1.jpg" alt="">
						</div>
						<div class="service-details">
							<h5><a href="#">Consultoría Jurídica</a></h5>
							<p>Este servicio está dirigido a personas naturales y jurídicas que requieran de respuestas fundamentadas...</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-service">
						<div class="service-thumb">
							<img class="img-fluid" src="img/service/service2.jpg" alt="">
						</div>
						<div class="service-details">
							<h5><a href="#">Representación Jurídica</a></h5>
							<p>La Firma brinda asesoría con un calificado grupo de Abogados especializados en las áreas...</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-service">
						<div class="service-thumb">
							<img class="img-fluid" src="img/service/service3.jpg" alt="">
						</div>
						<div class="service-details">
							<h5><a href="#">Asesoría Legal Empresarial</a></h5>
							<p>Consecuentes con el crecimiento y la necesidad de la vinculación laboral, y las  diferentes tendencias...</p>
						</div>
					</div>
                </div>
                <!-- single service -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-service">
						<div class="service-thumb">
							<img class="img-fluid" src="img/service/service3.jpg" alt="">
						</div>
						<div class="service-details">
							<h5><a href="#">Derecho de la seguridad social</a></h5>
							<p>Asesoramos y prestamos el servicio administrativo y procesal...</p>
						</div>
					</div>
                </div>
                <!-- single service -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-service">
						<div class="service-thumb">
							<img class="img-fluid" src="img/service/service3.jpg" alt="">
						</div>
						<div class="service-details">
							<h5><a href="#">Derecho laboral individual</a></h5>
							<p>Asesoramos y acompañamos administrativamente y judicialmente...</p>
						</div>
					</div>
                </div>
                <!-- single service -->
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="single-service">
						<div class="service-thumb">
							<img class="img-fluid" src="img/service/service3.jpg" alt="">
						</div>
						<div class="service-details">
							<h5><a href="#">Derecho no litigioso</a></h5>
							<p>Somos un equipo de expertos en el área de derecho no litigioso…</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End service Area =================-->
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
					<h1>Ofrecer el mejor asesoramiento y acompañamiento legal</h1>
					<p>Somos un grupo de profesionales dedicados al asesoramiento y acompañamiento para clientes que estén con dudas en todo lo referente a los derechos y deberes que tenemos en materia de derecho laboral y la seguridad social; brindando seguridad, compromiso, responsabilidad, eficiencia y eficacia.</p>
				</div>
			</div>
		</div>
    </section>
    <br><br><br><br>
@endsection