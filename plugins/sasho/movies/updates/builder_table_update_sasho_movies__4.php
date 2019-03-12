<?php namespace Sasho\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSashoMovies4 extends Migration
{
    public function up()
    {
        Schema::table('sasho_movies_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->boolean('published')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sasho_movies_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('published');
        });
    }
}
