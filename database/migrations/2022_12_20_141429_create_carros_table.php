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
        Schema::create('automoveis', function (Blueprint $table) {
           
                $table->increments('id');
                $table->integer('id_user')->unsigned();
                $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
                $table->string('marca');
                $table->string('modelo');
                $table->integer('ano');
                
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
        Schema::dropIfExists('automoveis');
    }
};
