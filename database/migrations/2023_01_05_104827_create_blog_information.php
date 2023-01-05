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
        Schema::create('blog_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('status');
            $table->string('premiered');
            $table->string('studio');
            $table->string('genre');
            $table->string('licensors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_information');
    }
};
