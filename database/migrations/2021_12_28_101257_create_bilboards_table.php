<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilboards', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('post_type');
            $table->string('title');
            $table->string('date');
            $table->string('phone');
            $table->string('description')->nullable();
            $table->string('address');
            $table->string('type');
            $table->string('size');
            $table->string('hieght');
            $table->string('price');
            $table->string('electricity')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->string('photo6')->nullable();
            $table->string('video')->nullable();
            $table->integer('active')->default(1);
            $table->bigInteger('table_api')->default(22);
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
        Schema::dropIfExists('bilboards');
    }
}
