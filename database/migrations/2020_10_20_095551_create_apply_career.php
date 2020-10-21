<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyCareer extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('apply_career', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('career_id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('address');
            $table->string('resume');
            $table->string('school');
            $table->string('qualification');
            $table->boolean('is_first_job');
            $table->string('emp_name')->nullable();
            $table->string('job_title')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->boolean('current_job')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('apply_career');
    }

}
