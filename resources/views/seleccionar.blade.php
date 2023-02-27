@extends('plantillas.principal')
@section('contenido')
    <form action="{{route("procesar")}}" method="POST">
        @csrf    
        Que idioma desea usar
        <input type="text" name="idioma">
        <input type="submit" value="enviar">
    </form>
@endsection