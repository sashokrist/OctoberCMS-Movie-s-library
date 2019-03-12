<?php namespace Sasho\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSashoMovies2 extends Migration
{
    public function up()
    {
        Schema::table('sasho_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sasho_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
}
