<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealcatplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mealcatplans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mealcat_id');
            $table->integer('price');
            $table->integer('duration');
            $table->string('description')->nullable();
            $table->boolean('status')->default('1');
            $table->foreign('mealcat_id')->references('id')->on('mealcategories')->onDelete('cascade');
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
        Schema::dropIfExists('mealcatplans');
    }
}
