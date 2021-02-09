<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('section_1_header')->nullable();
            $table->string('section_1_title')->nullable();
            $table->string('section_1_description')->nullable();
            $table->string('section_1_image')->nullable();
            $table->string('section_2_title_1')->nullable();
            $table->string('section_2_desc_1')->nullable();
            $table->string('section_2_icon_1')->nullable();
            $table->string('section_2_title_2')->nullable();
            $table->string('section_2_desc_2')->nullable();
            $table->string('section_2_icon_2')->nullable();
            $table->string('section_2_title_3')->nullable();
            $table->string('section_2_desc_3')->nullable();
            $table->string('section_2_icon_3')->nullable();
            $table->string('section_3_title')->nullable();
            $table->string('section_3_description')->nullable();
            $table->string('section_3_image')->nullable();
            $table->string('keyphrase')->nullable();
            $table->string('description')->nullable();
            $table->string('title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_pages');
    }
}
