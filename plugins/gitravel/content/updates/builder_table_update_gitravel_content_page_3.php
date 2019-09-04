<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGitravelContentPage3 extends Migration
{
    public function up()
    {
        Schema::table('gitravel_content_page', function($table)
        {
            $table->string('title')->change();
            $table->string('meta_image')->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('gitravel_content_page', function($table)
        {
            $table->string('title', 191)->change();
            $table->string('meta_image', 191)->change();
            // $table->string('slug', 191)->change();
        });
    }
}
