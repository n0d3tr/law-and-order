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
                        <a href="#">Consultoría jurídica</a>
                    </div>
                    <h2>Consultoría jurídica</h2>
                </div>
            </div>
        </div>
    </section>
	<!--================End Home Banner Area =================-->

	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				{{-- <h3 class="mb-30 title_color">Left Aligned</h3> --}}
				<div class="row">
					<div class="col-md-3">
						<img src="{{ asset('img/elements/d.jpg') }}" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20 left-align-p">
						<p style="font-size:15px">Este servicio está dirigido a personas naturales y jurídicas que requieran de respuestas fundamentadas en estrategias y acciones especializadas. Planteándoles las mejores alternativas para la solución de sus conflictos de una manera integral, rigurosa y eficiente, desde la realización de diferentes estudios legales.</p>
						<h4 class="mb-30 title_color">Este servicio incluye:</h4>
						<ul class="unordered-list">
							<li>Fta Keys</li>
							<li>For Women Only Your Computer Usage</li>
							<li>Facts Why Inkjet Printing Is Very Appealing
								<ul>
									<li>Addiction When Gambling Becomes
										<ul>
											<li>Protective Preventative Maintenance</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>Dealing With Technical Support 10 Useful Tips</li>
							
						</ul>
					</div>
				</div>
			</div>

			<div class="section-top-border">
				<h3 class="mb-30 title_color">Otros servicios:</h3>
				<div class="row">
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Consultoría jurídica</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to
								transfer money to them through any US bank or payment system. As a result of this law, most of the popular
								online casino networks</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Representación jurídica</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to
								transfer money to them through any US bank or payment system. As a result of this law, most of the popular
								online casino networks</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">Asesoría legal empresarial</h4>
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to
								transfer money to them through any US bank or payment system. As a result of this law, most of the popular
								online casino networks</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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

@endsection