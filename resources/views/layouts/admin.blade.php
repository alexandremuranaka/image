<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-3">
        <img src="" alt="logo" />
      </div>
      <div class="col-xs-12 col-sm-9">
        <ul>
          <li><a href="/admin/images/">Images</a></li>
          <li><a href="/admin/images/create">Nova Imagem</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

@yield('content')


</body>
</html>
