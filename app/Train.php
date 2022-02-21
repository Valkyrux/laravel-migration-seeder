<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'agency',
        'start_station',
        'stop_station',
        'date',
        'departure_time',
        'arrival_time',
        'train_code',
        'carriages_number',
        'delay',
        'erased'
    ];
}
