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
            $table->string('NomeFantasia')->nullable();
            $table->string('RazaoSocial')->nullable();
            $table->string('Foto');
            $table->string('CNPJ')->unique();
            $table->string('DI');
            $table->string('DV');
            $table->string('Atendimento');
            $table->string('Tipo');
            $table->string('Especialidade');
            $table->string('Estado');
            $table->string('Cidade');
            $table->string('Bairro');
            $table->string('Logradouro');
            $table->integer('Numero');
            $table->string('Complemento');
            $table->string('Email');
            $table->string('NomeResponsavel');
            $table->string('Cargo');
            $table->string('Telefone');
            $table->string('Celular');
            $table->string('EMatriz');
            $table->string('TemFilial');
            $table->string('Site');
            $table->string('RedeSocial');
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
