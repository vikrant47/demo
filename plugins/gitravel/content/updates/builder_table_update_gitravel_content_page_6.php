<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGitravelContentPage6 extends Migration
{
    public function up()
    {
        Schema::table('gitravel_content_page', function($table)
        {
            $table->integer('banner_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('gitravel_content_page', function($table)
        {
            $table->dropColumn('banner_id');
        });
    }
}
