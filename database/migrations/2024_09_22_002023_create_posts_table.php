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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title_anotacao');
            $table->text('conteudo');
            $table->enum('status',['Pendente', 'Aguardando', 'Concluido', 'Cancelado']);
            $table->enum('urgencia',['Sim', 'Não']);
            
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
