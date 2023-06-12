<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints(); // función utilizada en Laravel para desactivar temporalmente las restricciones de clave externa en las tablas de la base de datos.
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->unsignedBigInteger('idAutor');
            $table->foreign('idAutor')->references('id')->on('autores'); // esta es la clave foranea. conexxion con la tabla autores
            
            $table->unsignedBigInteger('idCategoria');
            $table->foreign('idCategoria')->references('id')->on('categorias'); //esta es la clave foranea. conexion con la tabla categorias

            $table->integer('numPaginas')->unsigned();
            $table->text('sinopsis')->unique();
            $table->string('isbn',13)->unique();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();//Cuando se utiliza la función Schema::enableForeignKeyConstraints(), se activan las restricciones de clave externa para las tablas definidas en el esquema de la base de datos. Esto significa que las reglas de integridad referencial se aplicarán al insertar, actualizar o eliminar registros en las tablas involucradas.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
