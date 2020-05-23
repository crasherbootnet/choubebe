<?php namespace Choubebe\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChoubebeParametreStatutCommande2 extends Migration
{
    public function up()
    {
        Schema::create('choubebe_parametre_statut_commande', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('libelle', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('choubebe_parametre_statut_commande');
    }
}
