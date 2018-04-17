<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'recorrencia'
    ];
}
