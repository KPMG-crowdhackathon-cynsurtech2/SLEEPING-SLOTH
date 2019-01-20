<?php namespace Sleepingsloth\Claimform\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSleepingslothClaimform6 extends Migration
{
    public function up()
    {
        Schema::table('sleepingsloth_claimform_', function($table)
        {
            $table->text('assessor_input');
        });
    }
    
    public function down()
    {
        Schema::table('sleepingsloth_claimform_', function($table)
        {
            $table->dropColumn('assessor_input');
        });
    }
}
