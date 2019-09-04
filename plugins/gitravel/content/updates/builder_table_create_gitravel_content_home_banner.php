<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentHomeBanner extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_home_banner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->string('type', 255);
            $table->string('slug');
            $table->string('sub_title', 255)->nullable();
            $table->text('description');
            $table->text('short_description');
            $table->string('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_home_banner');
    }
}
