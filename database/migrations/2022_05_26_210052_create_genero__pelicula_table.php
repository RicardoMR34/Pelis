<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genero__peliculas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('generoID')
            ->nullable()
            ->constrained('generos')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('peliculaID')
            ->nullable()
            ->constrained('peliculas')
            ->cascadeOnUpdate()
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genero__peliculas');
    }
};
