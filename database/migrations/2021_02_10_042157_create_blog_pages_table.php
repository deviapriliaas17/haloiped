<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_pages', function (Blueprint $table) {
            $table->id();
            $table->string('section_1_header')->nullable();
            $table->string('section_1_title')->nullable();
            $table->string('section_1_description')->nullable();
            $table->string('section_2_text')->nullable();
            $table->string('section_3_text')->nullable();
            $table->string('section_4_text')->nullable();
            $table->string('section_5_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_pages');
    }
}
