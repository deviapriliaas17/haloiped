<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('section_1_title')->nullable();
            $table->string('section_1_header')->nullable();
            $table->string('section_1_button_1')->nullable();
            $table->string('section_1_link_1')->nullable();
            $table->string('section_1_button_2')->nullable();
            $table->string('section_1_link_2')->nullable();
            $table->string('description')->nullable();
            $table->string('keyphrase')->nullable();
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
        Schema::dropIfExists('homepages');
    }
}
