@extends('layouts.plantilla')

@section('title','create')


@section('content')

<h1>Bienvenido a la ruta de grados y titulos para registrar estudiantes</h1>

<form action="{{route('grados_titulos.tesis.store')}}" method="POST">

    @csrf

    <label >idTesis<input type="number" name = 'idTesis'><br></label>
    <label >Nombre <br><input type="text" name = 'Nombre'><br></label>
    <label >Sustento <br><input type="text" name = 'Sustento'><br></label>
    <label>Calificacion
    <br>
    <input type="number" name="Calificacion" min="0" max="20" required>
    <br>
  </label>


    <button type = "submit"> Enviar formulario</button>
        
    
</form>

@endsection