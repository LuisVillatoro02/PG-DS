<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;
    protected $table = 'conditions';

    protected $fillable = [
        'attending_su',
        'name_surveyor',
        'master_name',
        'chief_name',
        'witness_dought',
        'witness_tank',
        'ship_location',
        'weather_temp',
        'sea_condition',
        'heading_ship',
        'direction_wind',
        'stream_speed',
        'tide',
        'ice',
    ];
}
