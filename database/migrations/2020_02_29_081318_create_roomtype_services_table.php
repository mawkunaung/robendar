<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomtypeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomtype_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('roomtype_id');
            $table->unsignedBigInteger('service_id');
            $table->timestamps();

            $table->foreign('roomtype_id')
                ->references('id')->on('roomtypes')
                ->onDelete('cascade');

            $table->foreign('service_id')
                ->references('id')->on('services')
                ->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roomtype_services');
    }
}
