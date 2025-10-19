<?php


// app/Http/Controllers/PreguntaController.php
namespace App\Http\Controllers;

use App\Models\Pregunta;

class PreguntaController extends Controller
{
    public function index()
    {
        $preguntas = Pregunta::all();
        return view('preguntas.index', compact('preguntas'));
    }

    public function show($id)
    {
        $pregunta = Pregunta::findOrFail($id);
        return view('preguntas.show', compact('pregunta'));
    }
}
