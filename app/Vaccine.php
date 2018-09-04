<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Vaccine extends Model
{

    protected $fillable = [
        'nome', 'descricao', 'recorrencia'
    ];

    public static function validate(array $data)
    {
        return Validator::make($data, [
          'nome' => 'required|string|max:45',
          'descricao' => 'string|max:100',
          'recorrencia' => 'required|string|max:10'
        ]);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'fk_vaccine');
    }
}
