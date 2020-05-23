<?php namespace Choubebe\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChoubebeParametreStatutCommande extends Migration
{
    public function up()
    {
        Schema::table('choubebe_parametre_statut_commande', function($table)
        {
            $table->string('libelle', 10)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('choubebe_parametre_statut_commande', function($table)
        {
            $table->integer('libelle')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
