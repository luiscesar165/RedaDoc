@extends('common.main_plantilla')

@section('title')

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
{{-- <link rel="canonical" href="https://oxas.tech" /> --}}
<style>
 

</style>
@endsection

@section('content')
  {{-- cover principal --}}
  @include('home.cover-main')
  {{-- Proposal --}}
  @include('home.proposal')
  {{-- CTA Help --}}
  @include('home.cta-help')
  {{-- Form --}}
  {{-- @include('home.form') --}}
  {{-- Modales --}}
  @include('home.modales')
@endsection