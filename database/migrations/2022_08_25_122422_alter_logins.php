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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //fazer o rollback
        //$table->dropColumn(['tesNewColumn', 'param2', 'etc..']);
        $table->dropColumn('tesNewColumn');
    }
};
