<?php namespace Choubebe\Choubebe\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateChoubebeChoubebeArticle extends Migration
{
    public function up()
    {
        Schema::table('choubebe_choubebe_article', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('reduction')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('choubebe_choubebe_article', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->dropColumn('stock');
            $table->dropColumn('reduction');
        });
    }
}
