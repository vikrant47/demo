<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGitravelContentPage extends Migration
{
    public function up()
    {
        Schema::rename('gitravel_content_home_page', 'gitravel_content_page');
        Schema::table('gitravel_content_page', function($table)
        {
            $table->string('title')->change();
            $table->string('meta_image')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('gitravel_content_page', 'gitravel_content_home_page');
        Schema::table('gitravel_content_home_page', function($table)
        {
            $table->string('title', 191)->change();
            $table->string('meta_image', 191)->change();
        });
    }
}
