<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'fk_user'
    ];
}
