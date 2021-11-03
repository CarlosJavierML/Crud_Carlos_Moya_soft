@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<form action="/eps" method="POST">
  @csrf

  <div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>

  <a href="/eps" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
