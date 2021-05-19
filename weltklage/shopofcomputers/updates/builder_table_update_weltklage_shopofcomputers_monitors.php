<?php namespace Weltklage\Shopofcomputers\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateWeltklageShopofcomputersMonitors extends Migration
{
    public function up()
    {
        Schema::table('weltklage_shopofcomputers_monitors', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('weltklage_shopofcomputers_monitors', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
