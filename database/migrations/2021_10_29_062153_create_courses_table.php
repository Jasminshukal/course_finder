<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->index('slug')->unique();
            $table->string('name');
            $table->sting('banner');
            $table->text('overview');
            $table->text('requirement');
            $table->text('fees');
            $table->sting('subject')->index('subject');
            $table->sting('laval')->index('laval');
            $table->sting('destination')->index('destination');
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
        Schema::dropIfExists('courses');
    }
}
