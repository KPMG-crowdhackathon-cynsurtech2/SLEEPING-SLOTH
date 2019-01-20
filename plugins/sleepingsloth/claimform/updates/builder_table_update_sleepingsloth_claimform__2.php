<?php namespace Sleepingsloth\Claimform\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSleepingslothClaimform2 extends Migration
{
    public function up()
    {
        Schema::table('sleepingsloth_claimform_', function($table)
        {
            $table->integer('status');
        });
    }
    
    public function down()
    {
        Schema::table('sleepingsloth_claimform_', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
