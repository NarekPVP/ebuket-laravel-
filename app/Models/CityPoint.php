<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class CityPoint extends Model
{
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
