<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTheBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_the_businesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business')->nullable();
            $table->string('brand_name')->nullable();
            $table->date('establishment_date')->nullable();
            $table->integer('number_beehives')->nullable();
            $table->string('clients')->nullable();
            $table->string('annual_revenue')->nullable();
            $table->date('employment_date')->nullable();
            $table->boolean('is_side_business')->nullable();
            $table->string('business_info')->nullable();
            $table->string('business_location')->nullable();
            $table->string('business_duration')->nullable();
            $table->string('business_average_salary')->nullable();
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
        Schema::dropIfExists('about_the_businesses');
    }
}
