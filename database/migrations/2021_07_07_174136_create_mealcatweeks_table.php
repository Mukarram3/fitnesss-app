<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealcatweeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mealcatweeks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mealcatid');
            $table->unsignedBigInteger('mealcatplanid');
            $table->integer('weeknumber');
            $table->boolean('status')->default('1');
            $table->foreign('mealcatid')->references('id')->on('mealcategories')->onDelete('cascade');
            $table->foreign('mealcatplanid')->references('id')->on('mealcatplans')->onDelete('cascade');
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
        Schema::dropIfExists('mealcatweeks');
    }
}
