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
        Schema::create('userserverbridges', function (Blueprint $table) {
            $table->id();
            $table->string('user_username');
            $table->foreign('user_username')->references('user_username')->on('users');
            $table->string('server_tagname');
            $table->foreign('server_tagname')->references('server_tagname')->on('servers');
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
        Schema::dropIfExists('userserverbridges');
    }
};
