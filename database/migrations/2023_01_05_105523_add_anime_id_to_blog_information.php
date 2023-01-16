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
        Schema::table('blog_information', function (Blueprint $table) {
            $table->unsignedInteger('anime_id')->after('id');
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
        Schema::table('blog_information', function (Blueprint $table) {
            $table->dropColumn('anime_id');
        });
    }
};
