@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Eps</h1>
@stop

@section('content')
    <a href="eps/create" class="btn btn-success mb-3">Crear</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($eps as $eps)
      <tr>
        <th>{{$eps->id}}</th>
        <td>{{$eps->codigo}}</td>
        <td>{{$eps->nombre}}</td>
        <td>
            <form action="{{route ('eps.destroy', $eps->id)}}" method="POST">
                @csrf
                @method('delete')
                <a type="submit" href="/eps/{{$eps->id}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
