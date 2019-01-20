<?php namespace Sleepingsloth\Claimform\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSleepingslothClaimform7 extends Migration
{
    public function up()
    {
        Schema::table('sleepingsloth_claimform_', function($table)
        {
            $table->integer('receipt_uploads_status')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('sleepingsloth_claimform_', function($table)
        {
            $table->dropColumn('receipt_uploads_status');
        });
    }
}
