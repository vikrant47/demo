<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentSectionAssociations extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_section_associations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('section_id');
            $table->integer('section_item_id');
            $table->string('section_type');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_section_associations');
    }
}
