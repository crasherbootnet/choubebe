<?php namespace Choubebe\Choubebe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteChoubebeChoubebeStatutCommande extends Migration
{
    public function up()
    {
        Schema::dropIfExists('choubebe_choubebe_statut_commande');
    }
    
    public function down()
    {
        Schema::create('choubebe_choubebe_statut_commande', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('libelle', 191)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
