<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }
}
