<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meal_catid');
            $table->string('title');
            $table->text('image');
            $table->text('ingredients')->nullable();
            $table->text('steps')->nullable();
            $table->integer('duration');
            $table->text('description')->nullable();
            $table->boolean('status')->default('1');
            $table->foreign('meal_catid')->references('id')->on('mealcategories')->onDelete('cascade');
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
        Schema::dropIfExists('meals');
    }
}
