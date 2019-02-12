<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('foto')->nullable($value = true);
            $table->string('cpf')->unique();
            $table->string('atendimento')->nullable($value = true);
            $table->string('tipo')->nullable($value = true);
            $table->string('cnpj');
            $table->string('especialidade')->nullable($value = true);
            $table->string('estado')->nullable($value = true);
            $table->string('cidade')->nullable($value = true);
            $table->string('bairro')->nullable($value = true);
            $table->string('logradouro')->nullable($value = true);
            $table->integer('numero')->nullable($value = true);
            $table->string('complemento')->nullable($value = true);
            $table->string('email')->nullable($value = true);
            $table->string('telefone')->nullable($value = true);
            $table->string('celular')->nullable($value = true);
            $table->string('site')->nullable($value = true);
            $table->string('facebook')->nullable($value = true);
            $table->string('instagram')->nullable($value = true);
            $table->string('linkedin')->nullable($value = true);
            $table->string('twitter')->nullable($value = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionals');
    }
}
