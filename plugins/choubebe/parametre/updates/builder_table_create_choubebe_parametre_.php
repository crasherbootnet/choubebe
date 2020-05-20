<?php namespace Choubebe\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChoubebeParametre extends Migration
{
    public function up()
    {
        Schema::create('choubebe_parametre_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('libelle');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('choubebe_parametre_');
    }
}
