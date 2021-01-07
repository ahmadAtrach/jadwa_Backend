<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_income');
            $table->string('income');
            $table->boolean('is_employed');
            $table->string('employing_place');
            $table->string('employment_job');
            $table->date('employment_date');
            $table->string('employment_salary');
            $table->boolean('is_side_business');
            $table->string('business_info');
            $table->string('business_location');
            $table->string('business_date');
            $table->string('business_average_salary');
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
        Schema::dropIfExists('incomes');
    }
}
