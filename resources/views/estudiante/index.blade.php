@extends('layouts.app')

@section('content')
    <h1>Lista de Estudiantes</h1>
    <ul>
        @foreach($estudiantes as $estudiante)
            <li>{{ $estudiante->nombre }} {{ $estudiante->apellido }}</li>
        @endforeach
    </ul>
@endsection
