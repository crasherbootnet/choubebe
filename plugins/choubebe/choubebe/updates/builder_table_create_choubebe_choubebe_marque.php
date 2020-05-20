<?php namespace Choubebe\Choubebe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChoubebeChoubebeMarque extends Migration
{
    public function up()
    {
        Schema::create('choubebe_choubebe_marque', function($table)
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
        Schema::dropIfExists('choubebe_choubebe_marque');
    }
}
