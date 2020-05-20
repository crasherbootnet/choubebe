<?php namespace Choubebe\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChoubebeParametreAge extends Migration
{
    public function up()
    {
        Schema::create('choubebe_parametre_age', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('libelle')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('choubebe_parametre_age');
    }
}
