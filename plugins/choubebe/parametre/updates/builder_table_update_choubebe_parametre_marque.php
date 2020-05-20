<?php namespace Choubebe\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChoubebeParametreMarque extends Migration
{
    public function up()
    {
        Schema::rename('choubebe_parametre_', 'choubebe_parametre_marque');
    }
    
    public function down()
    {
        Schema::rename('choubebe_parametre_marque', 'choubebe_parametre_');
    }
}
