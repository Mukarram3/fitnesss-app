<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workout_catid')->nullable();
            $table->unsignedBigInteger('meal_catid')->nullable();
            $table->string('name');
            $table->string('duration');
            $table->bigInteger('price');
            $table->boolean('status')->default('1');
            $table->string('description');
            $table->foreign('workout_catid')->references('id')->on('workouts')->onDelete('cascade');
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
        Schema::dropIfExists('subscription_plans');
    }
}
