<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'schedule_date', 'local', 'batch', 'observation', 'status', 'fk_user', 'fk_vaccine', 'vaccination_day'
    ];
}
