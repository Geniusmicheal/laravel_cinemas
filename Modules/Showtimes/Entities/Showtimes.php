<?php

namespace Modules\Showtimes\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Showtimes extends Model
{
    protected $table = 'showtime';
    protected $primaryKey =  'id';

    protected $fillable = [
        'showtime', 
        'movie',
        'location'
    ];

    const UPDATED_AT = null;
}
