<?php namespace Sleepingsloth\Claimform\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSleepingslothClaimform3 extends Migration
{
    public function up()
    {
        Schema::table('sleepingsloth_claimform_', function($table)
        {
            $table->integer('status')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sleepingsloth_claimform_', function($table)
        {
            $table->integer('status')->default(null)->change();
        });
    }
}
