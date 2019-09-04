<?php namespace RainLab\Location\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRainlabLocationCity extends Migration
{
    public function up()
    {
        Schema::create('rainlab_location_city', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('state_id');
            $table->string('name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rainlab_location_city');
    }
}
