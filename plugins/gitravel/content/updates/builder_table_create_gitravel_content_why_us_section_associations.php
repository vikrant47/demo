<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentWhyUsSectionAssociations extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_why_us_section_associations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('section_id');
            $table->integer('section_item_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_why_us_section_associations');
    }
}
