<?php namespace Choubebe\Choubebe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChoubebeChoubebeCommandeProduit extends Migration
{
    public function up()
    {
        Schema::table('choubebe_choubebe_commande_produit', function($table)
        {
            $table->integer('nbre')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('choubebe_choubebe_commande_produit', function($table)
        {
            $table->dropColumn('nbre');
        });
    }
}
