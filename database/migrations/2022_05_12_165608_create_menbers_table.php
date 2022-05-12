<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menbers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('birthdate');
            $table->string('dni');
            $table->number_format('celphone');
            $table->string('degree');
            $table->string('email');
            $table->string('address');
            $table->enum('civilestatus',['S','C','D']);
            $table->unsignedBigInteger('departamen_id');
            $table->foreign('departamen_id')->references('id')->on('departaments')->onDelete('cascade');
            $table->unsignedBigInteger('provin_id');
            $table->foreign('provin_id')->references('id')->on('provins')->onDelete('cascade');
            $table->unsignedBigInteger('distric_id');
            $table->foreign('distric_id')->references('id')->on('districs')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


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
        Schema::dropIfExists('menbers');
    }
};
