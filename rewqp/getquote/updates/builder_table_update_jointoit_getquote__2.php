<?php namespace Rewqp\GetQuote\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRewqpGetquote2 extends Migration
{
    public function up()
    {
        Schema::table('rewqp_getquote_', function($table)
        {
            $table->renameColumn('address', 'zip_code');
        });
    }
    
    public function down()
    {
        Schema::table('rewqp_getquote_', function($table)
        {
            $table->renameColumn('zip_code', 'address');
        });
    }
}
