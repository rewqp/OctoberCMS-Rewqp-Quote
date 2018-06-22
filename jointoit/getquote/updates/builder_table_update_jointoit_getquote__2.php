<?php namespace Jointoit\GetQuote\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJointoitGetquote2 extends Migration
{
    public function up()
    {
        Schema::table('jointoit_getquote_', function($table)
        {
            $table->renameColumn('address', 'zip_code');
        });
    }
    
    public function down()
    {
        Schema::table('jointoit_getquote_', function($table)
        {
            $table->renameColumn('zip_code', 'address');
        });
    }
}
