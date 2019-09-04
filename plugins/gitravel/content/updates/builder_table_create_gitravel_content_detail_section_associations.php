<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentDetailSectionAssociations extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_detail_section_associations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('section_id');
            $table->integer('section_item_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_detail_section_associations');
    }
}
