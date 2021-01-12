<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListofEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listof_equipment', function (Blueprint $table) {
            $table->id();
            $table->string("item");
            $table->integer("quantity");
            $table->double("value");
            $table->unsignedBigInteger("about_the_businesses_id");
            $table->foreign("about_the_businesses_id")->references('id')->on('about_the_businesses')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('listof_equipment');
    }
}
