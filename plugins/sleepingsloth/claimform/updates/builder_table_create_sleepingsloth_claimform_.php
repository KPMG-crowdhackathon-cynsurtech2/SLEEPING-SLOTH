<?php namespace Sleepingsloth\Claimform\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSleepingslothClaimform extends Migration
{
    public function up()
    {
        Schema::create('sleepingsloth_claimform_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('incident_report');
            $table->text('insurer_number');
            $table->text('insurer_email');
            $table->text('other_name');
            $table->text('other_phone_number');
            $table->text('other_email');
            $table->text('fault');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sleepingsloth_claimform_');
    }
}
