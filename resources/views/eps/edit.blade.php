@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
    <form action="/eps/{{$eps->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$eps->codigo}}" readonly>
  </div>

    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$eps->nombre}}">
  </div>

  
  <a href="/eps" class="btn btn-secondary" >Cancelar</a>
  <button type="submit" class="btn btn-primary" >Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
