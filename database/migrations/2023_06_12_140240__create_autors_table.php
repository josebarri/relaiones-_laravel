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
        
        Schema::create('autores',function(Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apelldio1');
            $table->string('apelllido2');
            $table->date('fechaNacimiento');
            $table->date('fechaFallecimientos');
            $table->timestamps();

        });

        

        }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
