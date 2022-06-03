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
        Schema::create('servers', function (Blueprint $table) {
            $table->string('server_tagname',25)->primary();
            $table->string('server_name',50);
            $table->string('server_description_head',50);
            $table->string('server_description',100);
            $table->string('server_admin',25);
            $table->string('server_link',100);
            $table->string('branch_name');
            $table->foreign('branch_name')->references('branch_name')->on('branches');
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
        Schema::dropIfExists('servers');
    }
};
