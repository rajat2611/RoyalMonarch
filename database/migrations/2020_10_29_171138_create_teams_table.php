<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('designation');
            $table->string('image');
            $table->longText('address');
            $table->longText('bio');
            $table->longText('personal_info');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('skype');
            $table->string('cover_image');
            $table->string('profile_image');
            $table->boolean('status');
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
        Schema::dropIfExists('teams');
    }
}
