<?php namespace Jointoit\GetQuote\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJointoitGetquote3 extends Migration
{
    public function up()
    {
        Schema::table('jointoit_getquote_', function($table)
        {
            $table->string('options');
        });
    }
    
    public function down()
    {
        Schema::table('jointoit_getquote_', function($table)
        {
            $table->dropColumn('options');
        });
    }
}
