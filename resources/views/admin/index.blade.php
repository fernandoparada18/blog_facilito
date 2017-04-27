@extends('admin.template.main')

@section('title', 'Inicio')

@section('content')
  <h3>Bienvenidos al panel de administración</h3>
  <hr>
  <a href="{{ route('admin.users.create') }}">Crear nuevo articulo</a> | <a href="{{ route('admin.tags.create') }}">Crear nuevo tag</a>
@endsection
