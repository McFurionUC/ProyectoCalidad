@extends('layouts.plantilla')

@section('title','index')


@section('content')

<h1>Bienvenido a la ruta grados y titulos index</h1>
<a href="{{route('grados_titulos.sustentacion.create')}}">Nuevo registro</a>
<ul>
   
@foreach ($sustentaciones as $sustentacion)
    <li>
        <a href="{{ route('grados_titulos.sustentacion.show', $sustentacion) }}">{{ $sustentacion->observacion }}</a>
        <form action="{{ route('grados_titulos.sustentacion.destroy', $sustentacion->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>
    </li>
@endforeach

</ul>
{{$sustentaciones->links()}}


@endsection