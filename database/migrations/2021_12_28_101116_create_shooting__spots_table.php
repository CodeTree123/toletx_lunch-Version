<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShootingSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shooting__spots', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('post_type');
            $table->string('title');
            $table->string('date');
            $table->string('phone');
            $table->string('description')->nullable();
            $table->string('address');
            $table->string('floor_area');
            $table->string('road_width');
            $table->string('price');
            $table->string('lift')->nullable();
            $table->string('parking')->nullable();
            $table->string('dining')->nullable();
            $table->string('electricity')->nullable();
            $table->string('toilet')->nullable();
            $table->string('shed')->nullable();
            $table->string('generator')->nullable();
            $table->string('gas')->nullable();
            $table->string('water')->nullable();
            $table->string('change_room')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->string('photo6')->nullable();
            $table->string('video')->nullable();
            $table->integer('active')->default(1);
            $table->bigInteger('table_api')->default(18);
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
        Schema::dropIfExists('shooting__spots');
    }
}
