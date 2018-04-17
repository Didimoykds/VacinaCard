<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'dataMarcada', 'local', 'lote', 'observacao', 'status', 'fk_user', 'fk_vaccine', 'diaVacina'
    ];
}
