<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentHomePage extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_home_page', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('title');
            $table->text('meta_description')->nullable();
            $table->string('meta_image')->nullable();
            $table->integer('detail_page')->default(0);
            $table->string('detail_item_type')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary(['id']);
            $table->integer('country_id')->unsigned()->nullable()->index();
            $table->integer('state_id')->unsigned()->nullable()->index();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_home_page');
    }
}
