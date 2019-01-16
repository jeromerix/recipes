<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_recipe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ingredient_id')->unsigned();
            $table->integer('recipe_id')->unsigned();
            $table->decimal('amount',8,3);
            $table->integer('unit_id')->unsigned();

            $table->foreign('ingredient_id')->references('id')->on('ingredients');;
            $table->foreign('unit_id')->references('id')->on('units');;
            $table->foreign('recipe_id')->references('id')->on('recipes');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_recipe');
    }
}
