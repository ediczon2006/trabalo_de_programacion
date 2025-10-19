<?php
use App\Http\Controllers\CursoController;

// Ruta para mostrar la lista de cursos
Route::get('/academika', [CursoController::class, 'index']);

// Ruta para ver el detalle del curso
Route::get('/curso/{id}', [CursoController::class, 'show']);
