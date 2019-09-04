<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentOurServices extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_our_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->string('slug');
            $table->text('description');
            $table->string('icon');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->smallInteger('active')->default(1);
            $table->smallInteger('featured')->default(0);
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_our_services');
    }
}
