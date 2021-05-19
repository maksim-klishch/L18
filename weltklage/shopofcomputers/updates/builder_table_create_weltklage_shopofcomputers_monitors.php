<?php namespace Weltklage\Shopofcomputers\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateWeltklageShopofcomputersMonitors extends Migration
{
    public function up()
    {
        Schema::create('weltklage_shopofcomputers_monitors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('monitor_type', 50);
            $table->string('resolution', 10);
            $table->smallInteger('colors_number')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('weltklage_shopofcomputers_monitors');
    }
}
