<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('image');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->integer('numbers_rooms');
            $table->integer('numbers_bathrooms');
            $table->integer('floor');
            $table->boolean('furnished')->default(false);
            $table->boolean('conditioning')->default(false);
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
        Schema::dropIfExists('apartments');
    }
}
