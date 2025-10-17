<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $connection = 'mysql_movies'; 
    protected $table = 'movies';

    protected $fillable = [
        'title',
        'description',
        'release_year',
        'poster_url',
        'background_url',
        'trailer_url',
        'country_id',
        'language_id',
    ];

    public $timestamps = false;
}
