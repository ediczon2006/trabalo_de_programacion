<?php


// app/Http/Controllers/CursoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        // Cursos de secundaria con profesores ficticios
        $cursos = [
            ['id' => 1, 'nombre' => 'Matemáticas Avanzadas', 'estado' => 'Abierto', 'fecha' => '', 'instructor' => 'Juan Pérez', 'imagen' => asset('c:\laragon\www\trabajo\geometry-1023846_640.webp')],
            ['id' => 2, 'nombre' => 'Física II', 'estado' => 'Finalizado', 'fecha' => 'Disponible el 22 de octubre de 2025', 'instructor' => 'María Gómez', 'imagen' => asset('images/fisica.jpg')],
            ['id' => 3, 'nombre' => 'Química Orgánica', 'estado' => 'Abierto', 'fecha' => '', 'instructor' => 'Carlos López', 'imagen' => asset('images/quimica.jpg')],
            ['id' => 4, 'nombre' => 'Historia Contemporánea', 'estado' => 'Finalizado', 'fecha' => '', 'instructor' => 'Lucía Martínez', 'imagen' => asset('images/historia.jpg')],
            ['id' => 5, 'nombre' => 'Lengua y Literatura', 'estado' => 'Abierto', 'fecha' => '', 'instructor' => 'Eduardo Sánchez', 'imagen' => asset('images/lengua.jpg')],
            // Más cursos ficticios...
        ];

        return view('academika.index', compact('cursos'));
    }

    public function show($id)
    {
        // Detalles de un curso, simulado por ahora
        $curso = [
            'id' => $id,
            'nombre' => 'Matemáticas Avanzadas',
            'estado' => 'Abierto',
            'fecha' => 'Disponible el 22 de octubre de 2025',
            'instructor' => 'Juan Pérez',
            'descripcion' => 'Este curso profundiza en los conceptos avanzados de álgebra, cálculo y geometría.',
            'imagen' => asset('images/matematicas.jpg')
        ];

        return view('academika.show', compact('curso'));
    }
}
