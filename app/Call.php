<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = [
        'title', 'description', 'fk_user'
    ];
}
