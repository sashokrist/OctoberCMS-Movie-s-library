<?php namespace Sasho\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'sasho_movies_';

    //protected $jsonable = ['actors'];

    //Relation
    public $belongsToMany =[
        'genres' =>[
            'Sasho\Movies\Models\Genre',
            'table' => 'sasho_movies_movies_genres',
            'order' => 'genre_title'
        ],
        'actors' =>[
            'Sasho\Movies\Models\Actor',
            'table' => 'sasho_movies_actors_movies',
            'order' => 'name'
        ]
    ];
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
