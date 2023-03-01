@extends('plantillas.principal')
@section('contenido')
<ul>
    <li> <a href="{{route("saludar")}}"> Saludar</a></li>
    <li><a href="{{route("despedir")}}">Despedir</a></li>
    <li><a href="{{route("seleccionar")}}"> Seleccionar idioma</a></li>
    <li><a href="{{route("login")}}"> Salir</a></li>
</ul>
@endsection
