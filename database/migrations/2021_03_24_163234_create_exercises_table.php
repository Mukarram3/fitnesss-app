<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('workout_catid');
            $table->text('image');
            $table->text('video_animat');
            $table->text('description')->nullable();
            $table->string('sets');
            $table->string('reps');
            $table->integer('duration');
            $table->boolean('status')->default('1');
            $table->foreign('workout_catid')->references('id')->on('workouts')->onDelete('cascade');
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
        Schema::dropIfExists('exercises');
    }
}
