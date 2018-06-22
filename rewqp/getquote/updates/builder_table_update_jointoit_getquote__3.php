<?php namespace Rewqp\GetQuote\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRewqpGetquote3 extends Migration
{
    public function up()
    {
        Schema::table('rewqp_getquote_', function($table)
        {
            $table->string('options');
        });
    }
    
    public function down()
    {
        Schema::table('rewqp_getquote_', function($table)
        {
            $table->dropColumn('options');
        });
    }
}
