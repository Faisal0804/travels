<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('slug',200)->nullable();
            $table->double('price')->default(0);
            $table->text('address')->nullable();
            $table->unsignedBigInteger('hotel_type_id')->nullable();
            $table->foreign('hotel_type_id')->references('id')->on('hotel_types')->onDelete('No Action')->onUpdate('No Action');
            $table->string('image',150)->default('default.jpg');
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
        Schema::dropIfExists('hotels');
    }
}
