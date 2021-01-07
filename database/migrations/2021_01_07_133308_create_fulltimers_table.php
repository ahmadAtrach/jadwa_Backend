<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFulltimersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fulltimers', function (Blueprint $table) {
            $table->id();
            $table->string("position");
            $table->unsignedBigInteger('about_the_businesses_id');
            $table->foreign('about_the_businesses_id')->references('id')->on('about_the_businesses')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('fulltimers');
    }
}
