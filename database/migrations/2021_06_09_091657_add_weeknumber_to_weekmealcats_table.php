<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWeeknumberToWeekmealcatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('weekmealcats', function (Blueprint $table) {
            $table->unsignedBigInteger('mealcatid');
            $table->unsignedBigInteger('planid');
            $table->integer('weeknumber');
            $table->foreign('mealcatid')->references('id')->on('mealcategories')->onDelete('cascade');
            $table->foreign('planid')->references('id')->on('mealcatplans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('weekmealcats', function (Blueprint $table) {
            //
        });
    }
}
