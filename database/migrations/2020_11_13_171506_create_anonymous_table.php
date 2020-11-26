<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnonymousTable extends Migration
{
    /**
     * Creates a table that has anonymous ids 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anonymous', function (Blueprint $table) {
            $table->uuid("anonymous_id");
            $table->increments("id");
            $table->foreign('id')->references('id')->on('person');
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
        Schema::dropIfExists('anonymous');
    }
}
