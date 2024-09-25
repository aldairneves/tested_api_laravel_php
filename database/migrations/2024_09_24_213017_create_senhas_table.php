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
        Schema::create('senhas', function (Blueprint $table) {
            $table->id();
            $table->string('instituicao');
            $table->string('senha');
            $table->date('data_alteracao');
            $table->string('motivo');
            $table->boolean('valido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('senhas');
    }
};
