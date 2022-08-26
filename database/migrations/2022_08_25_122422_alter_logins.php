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
        Schema::table('logins', function (Blueprint $table) {
            //alterando registro em logins
            $table->string('testNewColumn', 20);
            //modificador permitindo valores nulls
            $table->string('testNewColumn02', 20)->nullable();
            //modificador default
            $table->string('testNewColumn03', 20)->default('Ola');
            //adicionar uma coluna aṕos a outra 
            $table->float('peso')->after('tesNewColumn');

            //Chave estrangeira
            //$table->unsignedBigInteger('nome_chave_estrangeira');
            //$table->foreign('nome_chave_estrangeira')->references('chave_primaria')->on('nomeDaTabelaOndeTemosAChavePrimaria');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logins', function (Blueprint $table) {
            //fazer o rollback
            //$table->dropColumn(['tesNewColumn', 'param2', 'etc..']);
            $table->dropColumn(['testNewColumn', 'testNewColumn02', 'testNewColumn03']);     
        });
    }

};
