<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('name',100);
            $table->text('instruction');
            $table->char('method',50);
            $table->char('sort',20); // Dinner, Lunch etc.
            $table->integer('how_many');
            $table->char('cuisine',50);
            $table->integer('prep_time');
            $table->char('image_link');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
