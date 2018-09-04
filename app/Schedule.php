<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Schedule extends Model
{

    protected $fillable = [
        'dataMarcada', 'local', 'lote', 'observacao', 'status', 'fk_user', 'fk_vaccine', 'diaVacina'
    ];

    public static function validate(array $data)
    {
        return Validator::make($data, [
          'dataMarcada' => 'required|date|after:today',
          'local' => 'required|max:45',
          'lote' => 'string|max:45',
          'observacao' => 'string|max:45'
        ]);
    }

}
