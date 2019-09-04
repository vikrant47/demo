<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentDefaultSection extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_default_section', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id');
            $table->string('title');
            $table->string('slug');
            $table->string('type');
            $table->text('description')->nullable();
            $table->string('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->smallInteger('active')->default(1);
            $table->integer('sort_order')->default(0);
            $table->primary(['id']);
            $table->integer('country_id')->unsigned()->nullable()->index();
            $table->integer('state_id')->unsigned()->nullable()->index();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_default_section');
    }
}
