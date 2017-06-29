<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ elixir('assets/css/image.css') }}">
    <script defer type="text/javascript"  src="{{ elixir('assets/js/image.js') }}"></script>
</head>
<body>
<section id="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-3">
        <img src="/assets/images/bymeds_logo.png" alt="logo" />
      </div>
      <div class="col-xs-12 col-sm-1">
        <div id="btn_menu"><i class="fa fa-bars"></i></div>
      </div>
      <div class="col-xs-12 col-sm-8"></div>
    </div>
  </div>
</section>

<div id="menu">
  <div class="item">
    <h3>Pages <i class="fa fa-chevron-right show"></i><i class="fa fa-chevron-down"></i></h3>
    <div class="children">
      <p><a href="/admin/pages">Listar Páginas</a></p>
      <p><a href="/admin/pages/create">Nova Página</a></p>
    </div>
  </div>
  <div class="item">
    <h3>Images <i class="fa fa-chevron-right show"></i><i class="fa fa-chevron-down"></i></h3>
    <div class="children">
      <p><a href="/admin/images">Listar Imagens</a></p>
      <p><a href="/admin/images/create"></a></p>
    </div>
  </div>
</div>

@yield('content')


</body>
</html>
