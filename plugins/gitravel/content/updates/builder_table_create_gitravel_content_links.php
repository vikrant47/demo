<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentLinks extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_links', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('type')->default('URL');
            $table->string('media')->nullable();
            $table->string('image')->nullable();
            $table->text('url');
            $table->smallInteger('active')->default(1);
            $table->text('tooltip')->nullable();
            $table->integer('sort_order')->default(0);
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_links');
    }
}
