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
        Schema::create('userinterestbridges', function (Blueprint $table) {
            $table->id();
            $table->string('interest_name');
            $table->foreign('interest_name')->references('interest_name')->on('interests');
            $table->string('user_username');
            $table->foreign('user_username')->references('user_username')->on('users');
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
        Schema::dropIfExists('userinterestbridges');
    }
};
