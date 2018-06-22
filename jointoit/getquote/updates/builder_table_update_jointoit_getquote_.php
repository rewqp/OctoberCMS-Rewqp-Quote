<?php namespace Jointoit\GetQuote\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJointoitGetquote extends Migration
{
    public function up()
    {
        Schema::table('jointoit_getquote_', function($table)
        {
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::table('jointoit_getquote_', function($table)
        {
            $table->dropTimestamps();
        });
    }
}
