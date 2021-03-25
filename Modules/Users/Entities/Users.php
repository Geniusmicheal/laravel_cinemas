<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    protected $table = 'user';
    protected $primaryKey =  'id';

    protected $fillable = [
        'name', 
        'email', 
        'password'
    ];

    protected $hidden = [
        'password',
    ];
    const UPDATED_AT = null;
}
