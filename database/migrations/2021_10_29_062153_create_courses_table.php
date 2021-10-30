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
            $table->string('banner')->default('default.png');
            $table->text('overview');
            $table->text('requirement');
            $table->text('fees');
            $table->string('subject')->index('subject');
            $table->string('laval')->index('laval');
            $table->string('destination')->index('destination');
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
