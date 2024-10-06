@extends('layouts.plantilla')

@section('title', 'Actualizar registro')

@section('content')

<h1>Bienvenido a la ruta para actualizar, grados y títulos</h1>

<form action="{{ route('grados_titulos.sustentacion.update', $sustentacion) }}" method="POST">

    @csrf
    @method('PUT')

    <label>idsustentacion <input type="number" name='idsustentacion' value='{{ $sustentacion->idsustentacion }}' ><br></label>
    <label>idtesis <br><input type="number" name='idtesis' value='{{ $sustentacion->idtesis }}'><br></label>
    <label>fecha<br><input type="text" name='fecha' value='{{ $sustentacion->fecha }}'><br></label>
    <label>Resultado<br>
        <input type="number" name="resultado" min="0" max="1" required value='{{ $sustentacion->resultado }}'><br>
    </label>
    <label>observacion<br><input type="text" name='observacion' value='{{ $sustentacion->observacion }}'><br></label>

    <button type="submit">Actualizar formulario</button>

</form>

@endsection
