<?php

namespace Modules\Cinemas\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cinemas extends Model
{
    protected $table = 'cinemas';
    protected $primaryKey =  'cinema_id';

    protected $fillable = [
        'city', 
        'address', 
    ];

    const UPDATED_AT = null;
}
