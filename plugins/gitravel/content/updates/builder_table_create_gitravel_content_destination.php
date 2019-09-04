<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentDestination extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_destination', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('image_full_width')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('sort_order')->default(0);
            $table->smallInteger('featured')->default(1);
            $table->string('title')->change();
            $table->string('image')->change();
            $table->string('image_full_width')->change();
            $table->smallInteger('active')->default(1);
            $table->string('tag')->default('Discover');
            $table->integer('country_id')->unsigned()->nullable()->index();
            $table->integer('state_id')->unsigned()->nullable()->index();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_destination');
    }
}
