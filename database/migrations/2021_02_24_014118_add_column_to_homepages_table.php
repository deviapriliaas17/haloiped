<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homepages', function (Blueprint $table) {
            $table->string('section_1_image')->nullable()->after('section_1_title');
            $table->string('section_2_title')->nullable()->after('section_1_link_2');
            $table->string('section_2_header')->nullable()->before('section_2_title');
            $table->string('section_2_small_title')->nullable()->after('section_2_header');
            $table->string('section_2_image')->nullable()->after('section_2_small_title');
            $table->string('section_3_title')->nullable()->after('section_2_image');
            $table->string('section_3_header')->nullable()->after('section_3_title');
            $table->string('section_3_number_1')->nullable()->after('section_3_header');
            $table->string('section_3_text_1')->nullable()->after('section_3_number_1');
            $table->string('section_3_number_2')->nullable()->after('section_3_text_1');
            $table->string('section_3_text_2')->nullable()->after('section_3_number_2');
            $table->string('section_3_number_3')->nullable()->after('section_3_text_2');
            $table->string('section_3_text_3')->nullable()->after('section_3_number_3');
            $table->string('section_3_number_4')->nullable()->after('section_3_text_3');
            $table->string('section_3_text_4')->nullable()->after('section_3_number_4');
            $table->string('section_4_title')->nullable()->after('section_3_text_4');
            $table->string('section_4_header')->nullable()->after('section_4_title');
            $table->string('section_5_title')->nullable()->after('section_4_header');
            $table->string('section_5_header')->nullable()->after('section_5_title');
            $table->string('section_5_image')->nullable()->after('section_5_header');
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
