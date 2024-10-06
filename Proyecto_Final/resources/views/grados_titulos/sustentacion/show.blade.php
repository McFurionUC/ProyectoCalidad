@extends('layouts.plantilla')

@section('title', 'Sustentacion :' . $sustentacion->observacion)

@section('content')


<h1>Bienvenido a la ruta de grados y títulos, show: {{$sustentacion->observacion}}</h1>
<a href="{{ route('grados_titulos.sustentacion.index') }}">Volver a índice de grados y títulos</a>
<br>
<a href="{{route('grados_titulos.sustentacion.edit',$sustentacion)}}">Editar registro</a>
<p><strong>Observación: {{$sustentacion->idsustentacion}}</strong></p>


@endsection
