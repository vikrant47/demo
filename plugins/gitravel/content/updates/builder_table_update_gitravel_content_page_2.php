<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGitravelContentPage2 extends Migration
{
    public function up()
    {
        Schema::table('gitravel_content_page', function($table)
        {
            $table->string('slug');
            $table->smallInteger('active')->default(1);
            $table->string('title')->change();
            $table->string('meta_image')->change();
        });
    }
    
    public function down()
    {
        Schema::table('gitravel_content_page', function($table)
        {
            $table->dropColumn('slug');
            $table->dropColumn('active');
            $table->string('title', 191)->change();
            $table->string('meta_image', 191)->change();
        });
    }
}
