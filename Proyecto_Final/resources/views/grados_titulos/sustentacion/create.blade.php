@extends('layouts.plantilla')

@section('title','create')


@section('content')

<h1>Bienvenido a la ruta de grados y titulos para registrar estudiantes</h1>

<form action="{{route('grados_titulos.sustentacion.store')}}" method="POST">

    @csrf

    <label >idsustentacion <input type="number" name = 'idsustentacion'><br></label>
    <label >idtesis <br><input type="number" name = 'idtesis'><br></label>
    <label >fecha  <br><input type="date" name = 'fecha'><br></label>
    <label>Resultado
    <br>
    <input type="number" name="resultado" min="0" max="1" required>
    <br>
  </label>

    <label >observacion <br><input type="text" name = 'observacion'  ></label><br>

    <button type = "submit"> Enviar formulario</button>
        
    
</form>

@endsection