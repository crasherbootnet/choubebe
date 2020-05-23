<?php namespace Choubebe\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChoubebeParametreStatutCommande2 extends Migration
{
    public function up()
    {
        Schema::table('choubebe_parametre_statut_commande', function($table)
        {
            $table->string('libelle', 255)->change();
        });
    }
    
    public function down()
    {
        Schema::table('choubebe_parametre_statut_commande', function($table)
        {
            $table->string('libelle', 10)->change();
        });
    }
}
