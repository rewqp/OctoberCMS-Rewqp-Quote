<?php namespace Rewqp\GetQuote\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRewqpGetquote extends Migration
{
    public function up()
    {
        Schema::create('rewqp_getquote_', function($table)
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
        Schema::dropIfExists('rewqp_getquote_');
    }
}
