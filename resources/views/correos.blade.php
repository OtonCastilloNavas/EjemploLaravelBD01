@extends('ejemploplantilla')
@section('contenido')
<table class="table table-striped">
    <thead class="thead-dark">
    <tr><th scope="col">No</th><th scope="col">Dirección</th><th scope="col">Dueño</th></tr></thead>
    <tbody>
        
        @foreach ($correos as $correo )        
    <tr><td>{{$correo->id}}</td><td>{{$correo->direccion}}</td><td><a href="{{asset("/persona/$correo->id_persona")}}">{{$correo->id_persona}}</a></td></tr>
        @endforeach
        
    </tbody>
</table>
@endsection