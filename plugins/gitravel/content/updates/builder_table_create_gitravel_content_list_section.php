<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentListSection extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_list_section', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type');
            $table->integer('sort_order')->nullable();
            $table->integer('item_per_page')->default(6);
            $table->smallint('active');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_list_section');
    }
}
