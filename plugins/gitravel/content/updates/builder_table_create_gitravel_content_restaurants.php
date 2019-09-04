<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentRestaurants extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_restaurants', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->decimal('rating', 10, 0)->default(0);
            $table->integer('sort_order')->default(0);
            $table->text('short_description')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('currency_id')->nullable();
            $table->decimal('rating', 10, 2)->nullable()->default(0);
            $table->integer('tag_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('tag')->default('Discover');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->smallInteger('featured')->default(0);
            $table->smallInteger('active')->default(1);
            $table->integer('country_id')->unsigned()->nullable()->index();
            $table->integer('state_id')->unsigned()->nullable()->index();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gitravel_content_restaurants');
    }
}
