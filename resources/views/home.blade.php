@extends('common.main_plantilla')

@section('title')

{{-- precargar imagenes --}}
<link rel="preload" href="{{asset('imagen/oxas/fondo2.jpg')}}" as="image">
<link rel="preload" href="{{asset('imagen/oxas/eurochem.webp')}}" as="image">
<link rel="preload" href="{{asset('imagen/oxas/ecofood.webp')}}" as="image">
<link rel="preload" href="{{asset('imagen/oxas/servielectra.webp')}}" as="image">
<link rel="preload" href="{{asset('imagen/fondo.png')}}" as="image">

<!-- Primary Meta Tags -->
<title>RedaDoc - Creamos el contenido de salud por ti</title>
<meta name="title" content="RedaDoc - Creamos el contenido de salud por ti">
<meta name="description" content="Somos una agencia de contenido especializado en salud, con medicos formados en copywriting y posicionamiento web.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://redadoc.com/">
<meta property="og:title" content="RedaDoc - Creamos el contenido de salud por ti">
<meta property="og:description" content="Somos una agencia de contenido especializado en salud, con medicos formados en copywriting y posicionamiento web.">
<meta property="og:image" content="{{asset('imagen/oxas/share.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://redadoc.com/">
<meta property="twitter:title" content="RedaDoc - Creamos el contenido de salud por ti">
<meta property="twitter:description" content="Somos una agencia de contenido especializado en salud, con medicos formados en copywriting y posicionamiento web.">
<meta property="twitter:image" content="{{asset('imagen/oxas/share.jpg')}}">
{{-- url canonical --}}
<link rel="canonical" href="https://oxas.tech" />


@php
// importante para el color de las letras del header
$color_header='dark';
@endphp
@endsection

@section('content')

   <!-- cover -->
    <section class="pb-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center p-2">
            <h6 data-swiper-parallax="-100%" class="display-3"><b>Tu tienes la estrategia.</b></p>
            <h2 data-swiper-parallax="-100%" class="display-5">
              Nostros el contenido...
            </h2>
            <a href="" class="btn btn-purple btn-rounded px-5">Empieza ahora</a>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-8 text-center">
           <h3>&nbsp;&nbsp;&nbsp;Somos una agencia de contenido especializado en salud, con medicos formados en copywriting y posicionamiento web</h3>
          </div>
        </div>
       <div class="row" data-aos="fade-up" data-aos-delay="250">
          <div class="col">
          </div>
        </div>
      </div>
    </section>
    <!-- / cover -->

<section>
  <h1>Tienes una página web, pero sin contenido y pocas conversiones</h1>
  <p>Crear contenido para las web de salud puede ser complejo por dos razones: 

Existen términos que no todos manejan y también se debe verificar que la información sea real 

A esto se suma que dependiendo el público objetivo (personal de salud o pacientes), la terminología y el tono va a variar en el texto.</p>
<h2>Ya tengo contenido y visitas, pero no convierto 
</h2>
<p>Está generando contenido pero el mensaje no está llegando a tu cliente </p>
<h2>Aquí es donde entra la magia del copywriting o redacción persuasiva.</h2>
</section>

    <section class="bg-purple">
      <div class="container text-white">
        <div class="row justify-content-between">
          <div class="col-md-4">
            <h2><b>Pero tranquilo
</b> todo tiene solución...</h2>
          </div>
          <div class="col-md-7">
            <p class="lead">Agenda una cita para asesoría o deja que nosotros nos encargamos del contenido </p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row" data-aos="zoom-in">
          <div class="col">
            <div class="boxed p-5 p-lg-10">
              <div class="container">
                <div class="row justify-content-between align-items-center">
                  <div class="col-md-5">
                    <h2 class="display-3 mb-1"><b>Quiero</b> saber más</h2>
                    <p>Nos comunicaremos contigo rapidamente</p>
                    <div class="input-group mt-2">
                      <input type="text" class="form-control px-3" placeholder="tucorreo@mail.com" aria-label="Get a free copy">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Adelante</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img src="../../assets/images/demo/service/service-1.svg" alt="Image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="separator-top mt-10 pt-10 text-white">
        <div class="container text-white">
          <div class="row">
            <div class="col-md-4 text-center">
              <i class="svg-icon fs-50 mb-1 text-white">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="18,26.066 2,33 32,45 62,33 46,26.067 "/>
                <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="18,39.066 2,46 32,58 62,46 46,39.067 "/>
                <polygon fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="32,32 62,20 32,7 2,20 "/>
                </svg>
              </i>
              <h3 class="text-uppercase font-weight-normal fs-18 mt-2">Creamos el contenido para tu blog.</h3>
              <p>Atraer más visitas, genera confianza y aumenta tus conversiones. </p>
            </div>
            <div class="col-md-4 text-center">
              <i class="svg-icon fs-50 mb-1 text-white">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="17" y1="63" x2="47" y2="63"/>
                <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="32" y1="62" x2="32" y2="42"/>
                <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M48,26c0,8-8,16-16,16s-16-8-16-16"/>
                <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M40,27c0,4.418-3.582,8-8,8s-8-3.582-8-8V9
                  c0-4.418,3.582-8,8-8s8,3.582,8,8V27z"/>
                <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="29" y1="13" x2="24" y2="13"/>
                <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="29" y1="23" x2="24" y2="23"/>
                <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="40" y1="13" x2="35" y2="13"/>
                <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="40" y1="23" x2="35" y2="23"/>
                </svg>
              </i>
              <h3 class="text-uppercase font-weight-normal fs-18 mt-2">Generamos contenido para tus redes sociales de salud.</h3>
              <p>Cada red social tiene su particularidad y de acuerdo a lo que quiera transmitir, el mensaje va a variar.</p>
            </div>
            <div class="col-md-4 text-center">
              <i class="svg-icon fs-50 mb-1 text-white">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                <polygon fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="1,25 12,59 52,59 63,25 "/>
                <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="14" y1="25" x2="22" y2="5"/>
                <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="50" y1="25" x2="42" y2="5"/>
                <polyline fill="none" stroke="#000000" stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" points="23,41 30,48 
                  43,35 "/>
                </svg>
              </i>
              <h3 class="text-uppercase font-weight-normal fs-18 mt-2">Optimizamos el texto de tu página de venta.</h3>
              <p>El tráfico en tu página web es muy importante, pero las conversiones y las ventas son fundamentales para tu empresa. Convierte más <b>AHORA</b> </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- faq -->
    <section class="bg-light separator-top">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-6 pr-md-4">
            <h2 class="mb-4"><b>Los textos pueden ser creativos</b><br> pero nosotros haremos que ellos empiecen a generar ingresos</h2>
            <div class="accordion-group accordion-group-highlight" data-accordion-group>
              <div class="accordion open" data-accordion data-aos="fade-up">
                <div class="accordion-control" data-control>
                  <h5>Quiero crear contenido para médicos</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">
                    <p>Entre colegas la información se transmite mejor. Deja que nosotros nos comuniquemos por su empresa. </p>
                  </div>
                </div>
              </div>
              <div class="accordion" data-accordion data-aos="fade-up">
                <div class="accordion-control" data-control>
                  <h5>Quiero crear contenido para pacientes</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">
                    <p>Un paciente que entiende Lo que tienes que hacer, tomará decisiones más acertadas. Nuestra experiencia tratando de pacientes a diario nos permite transmitir de un mensaje claro y confiable .</p>
                  </div>
                </div>
              </div>
          <div class="col-md-6">
            <img src="../../assets/images/demo/service/service-2.svg" alt="Image">
          </div>
        </div>
      </div>
    </section>
    <!-- / faq -->


    <!-- testimonials -->
    <section class="bg-light pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 pr-md-5">
            <img src="../../assets/images/demo/service/service-3.svg" alt="Image">
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="owl-carousel">
              <blockquote class="blockquote">
                <p class="mb-0">El marketing de contenidos es <b>"el único marketing"</b></p>
                <footer class="blockquote-footer">Seth Godin</footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / testimonials -->


    <div class="bordered p-4">
  <div class="row justify-content-between align-items-center text-center text-md-left">
    <div class="col-md-2">
      <i class="svg-icon fs-60 text-blue">
        svg icon here
      </i>
    </div>
    <div class="col-md-6">
      <h3 class="mb-1">Te tomaste el tiempo y llegaste hasta el final </h3>
      <p>Sabemos que eres una persona ocupada. Y si te tomaste el tiempo de llegar hasta este punto probablemente necesites nuestro servicio.
        <p>Pero si aún tienes dudas o ya no las tienes pero quieres hablar con nosotros... </p>
</p>
    </div>
    <div class="col-md-4 text-lg-right">
      <a href="" class="btn btn-primary btn-rounded px-5">Escribenos</a>
    </div>
  </div>
</div>


@endsection