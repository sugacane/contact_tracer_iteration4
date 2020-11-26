<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments("id");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email_address")->unique();
            $table->string("contact_number");
            /*
            $table->string("national_id");
            $table->string("passport_number");*/
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
        Schema::dropIfExists('person');
    }
}
