<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_banner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner')->nullable();
            $table->string('alt')->nullable();
            $table->string('url')->nullable();
            $table->string('link_1')->nullable();
            $table->string('link_2')->nullable();
            $table->string('short_title')->nullable();
            $table->string('main_title')->nullable();
            $table->string('short_description')->nullable();
            $table->string('main_title_color')->nullable();
            $table->string('short_description_color')->nullable();
            $table->string('link_1_color')->nullable();
            $table->string('link_2_color')->nullable();
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
        Schema::dropIfExists('home_banner');
    }
}
