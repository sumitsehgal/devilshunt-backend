<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->string('email');
            $table->string('language');
            $table->date('dob');
            $table->string('qualification');
            $table->string('martial');
            $table->string('dance_category');
            $table->string('song_performing');
            $table->string('wpnumber');
            $table->string('height');
            $table->string('age_group');
            $table->string('address');
            $table->string('how_you_know');
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
        Schema::dropIfExists('join_us');
    }
}
