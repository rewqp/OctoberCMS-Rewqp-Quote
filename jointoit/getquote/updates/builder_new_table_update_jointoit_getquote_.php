<?php namespace Jointoit\GetQuote\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderNewTableUpdateJointoitGetquote extends Migration
{
    public function up()
    {
        Schema::table('jointoit_getquote_', function($table)
        {
            $table->integer('active')->default(0);
            $table->text('needs')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jointoit_getquote_', function($table)
        {
            $table->dropColumn('active');
            $table->string('needs', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
