<?php namespace Sasho\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSashoMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('sasho_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sasho_movies_genres');
    }
}
