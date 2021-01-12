<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutThePremisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_the_premises', function (Blueprint $table) {
            $table->id();
            $table->string("location");
            $table->string("plot_number");
            $table->string("plot_area");
            $table->string("premises_ownership");
            $table->integer("number_of_shared");
            $table->double("monthly_rent");
            $table->string("rent_period");
            $table->string("land_surrounding");
            $table->string("land_soil_description");
            $table->string("land_nature_description");
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
        Schema::dropIfExists('about_the_premises');
    }
}
