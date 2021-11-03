@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de pacientes</h1>
@stop

@section('content')
    <a href="pacientes/create" class="btn btn-success mb-3">Crear</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Cedula</th>
        <th scope="col">Eps</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pacientes as $paciente)
      <tr>
        <th>{{$paciente->id}}</th>
        <td>{{$paciente->nombre}}</td>
        <td>{{$paciente->cedula}}</td>
        <td>{{$paciente->id_eps}}</td>
        <td>
            <form action="{{route ('pacientes.destroy', $paciente->id)}}" method="POST">
                @csrf
                @method('delete')
                <a type="submit" href="/pacientes/{{$paciente->id}}/edit" class="btn btn-info">Editar</a>
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
