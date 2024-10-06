@extends('layouts.plantilla')

@section('title', 'Tesis: ' . $tesis->Nombre)

@section('content')


<h1>Bienvenido a la ruta de grados y títulos show: {{$tesis->Nombre}}</h1>
<a href="{{ route('grados_titulos.tesis.index') }}">Volver a index de grados y títulos</a>
<a href="{{route('grados_titulos.tesis.edit',$tesis)}}">Editar registro</a>

<p><strong>Observacion: {{$tesis->idTesis}}</strong></p>

@endsection