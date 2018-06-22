<?php namespace Jointoit\GetQuote\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJointoitGetquote extends Migration
{
    public function up()
    {
        Schema::create('jointoit_getquote_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_form');
            $table->string('mobile_phone');
            $table->string('home_phone');
            $table->string('address');
            $table->text('needs');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jointoit_getquote_');
    }
}
