<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGitravelContentPage5 extends Migration
{
    public function up()
    {
        Schema::table('gitravel_content_page', function($table)
        {
            $table->text('meta_keyword')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('gitravel_content_page', function($table)
        {
            $table->text('meta_keyword')->nullable(false)->change();
        });
    }
}
