<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('local');
            $table->string('title')->index();
            $table->string('description');
            $table->string('category')->nullable(false);
            $table->string('image_url')->nullable(false);
            $table->string('video_url')->nullable(false);
            $table->boolean('latest_flag')->default(false);
            $table->boolean('delete_flag')->default(false);
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
        Schema::dropIfExists('tv');
    }
}
