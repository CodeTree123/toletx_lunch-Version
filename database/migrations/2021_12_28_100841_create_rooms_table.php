<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
          $table->id();
          $table->string('user_id');
          $table->string('post_type');
          $table->string('title');
          $table->string('date');
          $table->string('phone');
          $table->string('s_charge');
          $table->string('description')->nullable();
          $table->string('address');
          $table->string('room_size');
          $table->string('price');
          $table->unsignedBigInteger('guest_count')->nullable();
          $table->string('wifi')->nullable();
          $table->string('attached_toilet')->nullable();
          $table->string('varanda')->nullable();
          $table->string('gas')->nullable();
          $table->string('water')->nullable();
          $table->string('electricity')->nullable();
          $table->string('lift')->nullable();
          $table->string('furnished')->nullable();
          $table->string('hot_water')->nullable();
          $table->string('ac')->nullable();
          $table->string('cable_tv')->nullable();
          $table->string('parking')->nullable();
          $table->string('generator')->nullable();
          $table->string('photo')->nullable();
          $table->string('photo1')->nullable();
          $table->string('photo2')->nullable();
          $table->string('photo3')->nullable();
          $table->string('photo4')->nullable();
          $table->string('photo5')->nullable();
          $table->string('photo6')->nullable();
          $table->string('video')->nullable();
          $table->integer('active')->default(1);
          $table->bigInteger('table_api')->default(1);
          $table->SoftDeletes();
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
        Schema::dropIfExists('rooms');
    }
}
