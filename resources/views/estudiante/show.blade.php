@extends('layouts.app')

@section('content')
    <h1>{{ $estudiante->nombre }} {{ $estudiante->apellido }}</h1>
    <p>Email: {{ $estudiante->email }}</p>
    <a href="{{ route('estudiantes.index') }}">Volver a la lista de estudiantes</a>
@endsection
