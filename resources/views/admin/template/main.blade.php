<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.min.css') }}">
	<!-- Bootstrap File Input -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap-fileinput/css/fileinput.min.css') }}" media="all"  />
</head>
<body class="admin-body">
	@include('admin.template.partials.nav')
	<section class="section-admin">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('title')</h3>
			</div>
			<div class="panel-body">
				@include('flash::message')
				@include('admin.template.partials.errors')
				@yield('content')
			</div>
		</div>
	</section>
	<footer class="admin-footer">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="collapse navbar-collapse">
		      <p class="navbar-text">Todos los derechos reservados &copy {{ date('Y') }} </p>
					<p class="navbar-text navbar-right"><b>CodigoFacilito</b></p>
		    </div>
		  </div>
		</nav>
	</footer>
	<script src="{{ asset('plugins/jquery/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>
	<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
	     This must be loaded before fileinput.min.js -->
	<script src="{{ asset('plugins/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js') }}" type="text/javascript"></script>
	<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
	     This must be loaded before fileinput.min.js -->
	<script src="{{ asset('plugins/bootstrap-fileinput/js/plugins/sortable.min.js') }}" type="text/javascript"></script>
	<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
	     This must be loaded before fileinput.min.js -->
	<script src="{{ asset('plugins/bootstrap-fileinput/js/plugins/purify.min.js') }}" type="text/javascript"></script>
	<!-- the main fileinput plugin file -->
	<script src="{{ asset('plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
	<!-- optionally if you need a theme like font awesome theme you can include
	    it as mentioned below -->
	<script src="{{ asset('plugins/bootstrap-fileinput/themes/fa/theme.js') }}"></script>
	<!-- optionally if you need translation for your language then include
	    locale file as mentioned below -->
	<script src="{{ asset('plugins/bootstrap-fileinput/js/locales/es.js') }}"></script>
	@yield('js')
</body>
</html>
