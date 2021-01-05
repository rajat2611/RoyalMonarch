<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('resume');
            $table->text('slug');
            $table->text('category');
            $table->string('author')->nullable();
            $table->longText('about_author')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->longText('body');
            $table->text("image")->nullable();
            $table->boolean('status');
            $table->dateTime('published_date');


            

            

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
        Schema::dropIfExists('blogs');
    }
}
