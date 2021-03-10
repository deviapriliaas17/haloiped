<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnShowToHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homepages', function (Blueprint $table) {
            $table->boolean('section_1_show')->after('section_1_link_1')->nullable();
            $table->boolean('section_2_show')->after('section_2_image')->nullable();
            $table->boolean('section_3_show')->after('section_3_text_4')->nullable();
            $table->boolean('section_4_show')->after('section_4_header')->nullable();
            $table->boolean('section_5_show')->after('section_5_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
