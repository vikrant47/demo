<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGitravelContentPage4 extends Migration
{
    public function up()
    {
        Schema::table('gitravel_content_page', function($table)
        {
            $table->text('meta_keyword');
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('gitravel_content_page', function($table)
        {
            $table->dropColumn('meta_keyword');
            $table->integer('id')->change();
        });
    }
}
