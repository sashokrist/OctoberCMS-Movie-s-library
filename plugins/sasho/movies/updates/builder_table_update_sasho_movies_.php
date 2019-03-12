<?php namespace Sasho\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSashoMovies extends Migration
{
    public function up()
    {
        Schema::table('sasho_movies_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sasho_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
