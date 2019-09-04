<?php namespace GiTravel\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGitravelContentTourPackages extends Migration
{
    public function up()
    {
        Schema::create('gitravel_content_tour_packages', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('sub_title')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('sort_order')->default(0);
            $table->integer('amount')->nullable();
            $table->integer('currency_id')->nullable();
            $table->decimal('rating', 10, 2)->nullable()->default(0);
            $table->integer('tag_id')->nullable();
            $table->string('city_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('days');
            $table->smallInteger('featured')->default(0);
            $table->smallInteger('active')->default(1);
            $table->integer('night')->default(2);
            $table->integer('days')->default(1)->change();
            $table->integer('link_id');
            $table->text('detailed_description');
            $table->text('travel_plan');
            $table->integer('country_id')->unsigned()->nullable()->index();
            $table->integer('state_id')->unsigned()->nullable()->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gitravel_content_tour_packages');
    }
}
