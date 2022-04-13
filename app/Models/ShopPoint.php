<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class ShopPoint extends Model
{
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_point_id');
    }
}
