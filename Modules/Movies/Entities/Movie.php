<?php

namespace Modules\Movies\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{       
    protected $table = 'movies';
    protected $primaryKey =  'movies_id';

    protected $fillable = [
        'title', 
        'slug', 
        'genre',
        'img',
        'synopsis'
    ];

    const UPDATED_AT = null;
}
