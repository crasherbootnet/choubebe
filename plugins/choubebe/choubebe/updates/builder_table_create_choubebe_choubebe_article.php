<?php namespace Choubebe\Choubebe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateChoubebeChoubebeArticle extends Migration
{
    public function up()
    {
        Schema::create('choubebe_choubebe_article', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('libelle')->nullable();
            $table->integer('prix');
            $table->text('description');
            $table->integer('marque_id')->nullable();
            $table->integer('age_id')->nullable();
            $table->string('sexe')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('choubebe_choubebe_article');
    }
}
