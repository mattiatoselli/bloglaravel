<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->bigInteger('userId'); //User Id
            $table->string('title'); //titolo dell'articolo
            $table->string('body'); //articolo
            $table ->integer('state'); //1=bozza;2=pubblicato;3=accettato //solo gli admin di livello 2 possono 
            //accettare articoli
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
        Schema::dropIfExists('articles');
        $table->dropColumn('userId');
        $table->dropColumn('title');
        $table->dropColumn('body');
        $table->dropColumn('state');
    }
}
