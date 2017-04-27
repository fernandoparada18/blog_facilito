<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/journal/bootstrap.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/general.css') }}"/>
  <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}"/>
  <title>@yield('title', 'Home') | Blog Facilito</title>
</head>
<body>
  <header>
    @include('front.template.partials.header')
  </header>
  <div class="container">
    @yield('content')
  </div>
  <footer>
    <hr>
		Todos los derechos reservados &copy {{ date('Y') }}
		<div class="pull-right">Fernando Parada</div>
	</footer>

	<script src="{{ asset('plugins/jquery/jquery-2.2.4.min.js') }}"></script>
</body>
</html>
