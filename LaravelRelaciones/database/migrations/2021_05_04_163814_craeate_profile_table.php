<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CraeateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function(Blueprint $table){
            $table->id();

            $table->string('title', 45);
            $table->text('bio');
            $table->string('website',45);

            //llave foranea 
            //este campo user_id, debe tener el mismo tipo de dato que el campo a relacionar
            $table->unsignedBigInteger('user_id')->unique();
           //atributos de la llave foranea, a que campo, a que tabla, hace referencia
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            

            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
