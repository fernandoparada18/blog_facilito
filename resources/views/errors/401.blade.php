<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acceso restringido</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/journal/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/error.css') }}" />
  </head>
  <body>
    <div class="box-admin">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="panel-title">Acceso Restringido</div>
          </div>
          <div class="panel-body">
            <img class="img-responsive center-block" src="{{ asset('images/error_access.png') }}">
            <hr />
            <strong class="text-center">
              <p class="text-center">Usted no tiene acceso a esta zona</p>
              <p>
                <a href="{{ route('front.index') }}">Click aquí para volver al inicio</a>
              </p>
            </strong>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
