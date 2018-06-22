<?php namespace Rewqp\GetQuote\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRewqpGetquote extends Migration
{
    public function up()
    {
        Schema::table('rewqp_getquote_', function($table)
        {
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::table('rewqp_getquote_', function($table)
        {
            $table->dropTimestamps();
        });
    }
}
