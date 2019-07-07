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
            $table->string('gender')->default('male');
            $table->string('email');
            $table->string('language')->nullable();
            $table->date('dob')->nullable();
            $table->string('qualification')->nullable();
            $table->string('martial')->default('single');
            $table->string('dance_category')->nullable();
            $table->string('song_performing')->nullable();
            $table->string('wpnumber')->nullable();
            $table->string('height')->nullable();
            $table->string('age_group')->nullable();
            $table->string('address')->nullable();
            $table->string('how_you_know')->nullable();
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
