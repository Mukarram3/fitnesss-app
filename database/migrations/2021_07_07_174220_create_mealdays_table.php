<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mealdays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mealcatid');
            $table->unsignedBigInteger('mealcatplanid');
            $table->unsignedBigInteger('mealcatweekid');
            $table->integer('daynumber');
            $table->boolean('status')->default('1');
            $table->foreign('mealcatid')->references('id')->on('mealcategories')->onDelete('cascade');
            $table->foreign('mealcatplanid')->references('id')->on('mealcatplans')->onDelete('cascade');
            $table->foreign('mealcatweekid')->references('id')->on('mealcatweeks')->onDelete('cascade');
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
        Schema::dropIfExists('mealdays');
    }
}
