@extends('common.main_plantilla')

@section('title')

<!-- Primary Meta Tags -->
<title>RedaDoc - Gracias por dejarnos tus datos</title>
<meta name="title" content="RedaDoc - Gracias por dejarnos tus datos">
<meta name="description" content="Somos una agencia de contenido especializado en salud, con medicos formados en copywriting y posicionamiento web.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://redadoc.com/gracias">
<meta property="og:title" content="RedaDoc - Gracias por dejarnos tus datos">
<meta property="og:description" content="Somos una agencia de contenido especializado en salud, con medicos formados en copywriting y posicionamiento web.">
<meta property="og:image" content="{{asset('imagen/oxas/share.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://redadoc.com/gracias">
<meta property="twitter:title" content="RedaDoc - Gracias por dejarnos tus datos">
<meta property="twitter:description" content="Somos una agencia de contenido especializado en salud, con medicos formados en copywriting y posicionamiento web.">
<meta property="twitter:image" content="{{asset('imagen/oxas/share.jpg')}}">
{{-- url canonical --}}
<link rel="canonical" href="https://redadoc.com/gracias" />

@endsection

@section('content')
  <!-- Event snippet for Enviar formulario de clientes potenciales Redadoc conversion page -->
  <script>
  gtag('event', 'conversion', {'send_to': 'AW-842391238/EY5ICM7v9Y0CEMa915ED'});
  </script>

  {{-- cover principal --}}
  @include('gracias.cover-main')
  
@endsection