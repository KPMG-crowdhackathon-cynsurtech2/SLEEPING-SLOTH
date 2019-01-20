<?php namespace Sleepingsloth\Claimform\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSleepingslothClaimform extends Migration
{
    public function up()
    {
        Schema::table('sleepingsloth_claimform_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->integer('insurer_number')->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('other_phone_number')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sleepingsloth_claimform_', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->text('insurer_number')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('other_phone_number')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
