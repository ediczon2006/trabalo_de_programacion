<?php


namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.index', compact('estudiantes'));
    }

    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiante.show', compact('estudiante'));
    }
}

