@extends('layouts.plantilla')

@section('title','update')


@section('content')

<h1>Bienvenido a la ruta de grados y titulos para actualizar tesis</h1>

<form action="{{route('grados_titulos.tesis.update',$tesis)}}" method="POST">

@csrf
@method('PUT')

    <label >idTesis<input type="number" name = 'idTesis' value='{{ $tesis->idTesis}}'  ><br></label>
    <label >Nombre <br><input type="text" name = 'Nombre'  value='{{ $tesis->Nombre}}'><br></label>
    <label >Sustento <br><input type="text" name = 'Sustento' value='{{ $tesis->Sustento}}'><br></label>
    <label>Calificacion
    <br>
    <input type="number" name="Calificacion" min="0" max="20" required value='{{ $tesis->Calificacion}}'>
    <br>
  </label>


    <button type = "submit"> Actualizar formulario</button>
        
    
</form>

@endsection