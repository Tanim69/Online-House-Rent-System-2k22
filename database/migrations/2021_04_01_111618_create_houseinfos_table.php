<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houseinfos', function (Blueprint $table) {
            $table->id();
            $table->integer('house_id');
            $table->string('house_name');
            $table->integer('user_id');
            $table->string('house_address');
            $table->double('phone_number');
            $table->string('tolet_date');
            $table->text('house_image');
            $table->string('house_description');
            $table->string('floor_description');
            $table->string('flat_description');
            $table->string('flat_name');
            $table->string('flat_size');
            $table->integer('flat_price');

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
        Schema::dropIfExists('houseinfos');
    }
}
