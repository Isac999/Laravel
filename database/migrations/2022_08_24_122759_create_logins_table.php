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
        Schema::create('logins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email', 45);
            $table->string('password', 45);
        });
        /*
        Realizando alter table
        Schema::table('logins', function (Blueprint $table) {
            //fazer o rollback
            //$table->dropColumn(['tesNewColumn', 'param2', 'etc..']);
            $table->dropColumn(['testNewColumn', 'testNewColumn02', 'testNewColumn03']);     
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logins');
    }
};
