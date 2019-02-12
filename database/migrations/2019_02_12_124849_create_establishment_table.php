<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomeFantasia');
            $table->string('RazaoSocial');
            $table->string('Foto')->nullable($value = true);
            $table->string('CNPJ')->unique();
            $table->string('DI')->nullable($value = true);
            $table->string('DV')->nullable($value = true);
            $table->string('Atendimento')->nullable($value = true);
            $table->string('Tipo')->nullable($value = true);
            $table->string('Especialidade')->nullable($value = true);
            $table->string('Estado')->nullable($value = true);
            $table->string('Cidade')->nullable($value = true);
            $table->string('Bairro')->nullable($value = true);
            $table->string('Logradouro')->nullable($value = true);
            $table->integer('Numero')->nullable($value = true);
            $table->string('Complemento')->nullable($value = true);
            $table->string('Email')->nullable($value = true);
            $table->string('NomeResponsavel')->nullable($value = true);
            $table->string('Cargo')->nullable($value = true);
            $table->string('Telefone')->nullable($value = true);
            $table->string('Celular')->nullable($value = true);
            $table->string('EMatriz')->nullable($value = true);
            $table->string('TemFilial')->nullable($value = true);
            $table->string('Site')->nullable($value = true);
            $table->string('RedeSocial')->nullable($value = true);
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
        Schema::dropIfExists('establishments');
    }
}
