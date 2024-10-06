@extends('layouts.plantilla')

@section('title','index')


@section('content')

<h1>Bienvenido a la ruta grados y titulos index</h1>
<a href="{{route('grados_titulos.tesis.create')}}">Nuevo registro</a>
<ul>
   
    @foreach ($Tesis as $tesis )
    <li>
        <a href="{{route('grados_titulos.tesis.show',$tesis)}}">{{$tesis->Nombre}}</a>
        <form action="{{ route('grados_titulos.tesis.destroy', $tesis->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>
    </li>
    @endforeach
</ul>
{{$Tesis->links()}}

 
@endsection