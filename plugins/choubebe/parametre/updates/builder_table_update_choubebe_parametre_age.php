<?php namespace Choubebe\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChoubebeParametreAge extends Migration
{
    public function up()
    {
        Schema::table('choubebe_parametre_age', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('choubebe_parametre_age', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
