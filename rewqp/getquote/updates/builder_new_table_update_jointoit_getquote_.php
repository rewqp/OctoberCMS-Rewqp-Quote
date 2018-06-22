<?php namespace Rewqp\GetQuote\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderNewTableUpdateRewqpGetquote extends Migration
{
    public function up()
    {
        Schema::table('rewqp_getquote_', function($table)
        {
            $table->integer('active')->default(0);
            $table->text('needs')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rewqp_getquote_', function($table)
        {
            $table->dropColumn('active');
            $table->string('needs', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
