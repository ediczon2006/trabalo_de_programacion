<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('cursos', function (Blueprint $table) {
        // Verifica si la columna no existe antes de agregarla
        if (!Schema::hasColumn('cursos', 'imagen')) {
            $table->string('imagen')->nullable();
        }
    });
}


};
