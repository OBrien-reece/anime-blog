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
        Schema::create('view_counter', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('anime_id');
            $table->integer('view_counter')->default(0);
            $table->foreign('anime_id')->references('id')->on('anime')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_counter');
    }
};
