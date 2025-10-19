<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesor.index', compact('profesores'));
    }

    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesor.show', compact('profesor'));
    }
}
