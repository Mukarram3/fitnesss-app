<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealtablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mealtables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mealcatid');
            $table->unsignedBigInteger('mealcatplanid');
            $table->unsignedBigInteger('mealcatweekid');
            $table->unsignedBigInteger('mealdayid');
            $table->string('title');
            $table->text('image');
            $table->string('mealtime');
            $table->text('ingredients')->nullable();
            $table->text('steps')->nullable();
            $table->integer('duration');
            $table->integer('calories');
            $table->integer('caloriesperc');
            $table->integer('carbo');
            $table->integer('carboperc');
            $table->integer('proteins');
            $table->integer('proteinsperc');
            $table->integer('fats');
            $table->integer('fatsperc');
            $table->string('complexity');
            $table->text('description')->nullable();
            $table->boolean('status')->default('1');
            $table->foreign('mealcatid')->references('id')->on('mealcategories')->onDelete('cascade');
            $table->foreign('mealcatplanid')->references('id')->on('mealcatplans')->onDelete('cascade');
            $table->foreign('mealcatweekid')->references('id')->on('mealcatweeks')->onDelete('cascade');
            $table->foreign('mealdayid')->references('id')->on('mealdays')->onDelete('cascade');
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
        Schema::dropIfExists('mealtables');
    }
}
