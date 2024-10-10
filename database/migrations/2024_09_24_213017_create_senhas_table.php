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
            $table->string('plataforma')->nullable();
            $table->string('email')->nullable();
            $table->string('senha')->nullable();
            $table->string('email_recovery')->nullable();
            $table->date('date_generation')->nullable();
            $table->boolean('senha_valido')->nullable();
            $table->boolean('senha_alterada')->nullable();
            $table->string('motivo')->nullable();
            $table->date('data_alteracao')->nullable();
            $table->foreignId('chaves_id')->constrained('chaves')->onDelete('cascade')->nullable();
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
