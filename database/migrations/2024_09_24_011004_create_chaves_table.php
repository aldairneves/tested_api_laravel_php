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
        Schema::create('chaves', function (Blueprint $table) {
            
            $table->id();
            $table->string('plataforma')->nullable();

            $table->string('codigo1')->nullable();
            $table->boolean('codigo1_used')->nullable();
            $table->string('reason1_use')->nullable();
            $table->date('date_used_1')->nullable();

            $table->string('codigo2')->nullable();
            $table->boolean('codigo2_used')->nullable();
            $table->string('reason2_use')->nullable();
            $table->date('date_used_2')->nullable();

            $table->string('codigo3')->nullable();
            $table->boolean('codigo3_used')->nullable();
            $table->string('reason3_use')->nullable();
            $table->date('date_used_3')->nullable();

            $table->string('codigo4')->nullable();
            $table->boolean('codigo4_used')->nullable();
            $table->string('reason4_use')->nullable();
            $table->date('date_used_4')->nullable();

            $table->string('codigo5')->nullable();
            $table->boolean('codigo5_used')->nullable();
            $table->string('reason5_use')->nullable();
            $table->date('date_used_5')->nullable();

            $table->string('codigo6')->nullable();
            $table->boolean('codigo6_used')->nullable();
            $table->string('reason6_use')->nullable();
            $table->date('date_used_6')->nullable();

            $table->string('codigo7')->nullable();
            $table->boolean('codigo7_used')->nullable();
            $table->string('reason7_use')->nullable();
            $table->date('date_used_7')->nullable();

            $table->string('codigo8')->nullable();
            $table->boolean('codigo8_used')->nullable();
            $table->string('reason8_use')->nullable();
            $table->date('date_used_8')->nullable();

            $table->string('codigo9')->nullable();
            $table->boolean('codigo9_used')->nullable();
            $table->string('reason9_use')->nullable();
            $table->date('date_used_9')->nullable();

            $table->string('codigo10')->nullable();
            $table->boolean('codigo10_used')->nullable();
            $table->string('reason10_use')->nullable();
            $table->date('date_used_10')->nullable();

            $table->string('codigo11')->nullable();
            $table->boolean('codigo11_used')->nullable();
            $table->string('reason11_use')->nullable();
            $table->date('date_used_11')->nullable();

            $table->string('codigo12')->nullable();
            $table->boolean('codigo12_used')->nullable();
            $table->string('reason12_use')->nullable();
            $table->date('date_used_12')->nullable();

            $table->string('codigo13')->nullable();
            $table->boolean('codigo13_used')->nullable();
            $table->string('reason13_use')->nullable();
            $table->date('date_used_13')->nullable();

            $table->string('codigo14')->nullable();
            $table->boolean('codigo14_used')->nullable();
            $table->string('reason14_use')->nullable();
            $table->date('date_used_14')->nullable();

            $table->string('path_anexo')->nullable();
            $table->boolean('valido')->nullable();
            $table->date('date_generation')->nullable();
            $table->date('date_closing')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('chaves');
    }
};