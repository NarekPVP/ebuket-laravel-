<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Price;

class Bouquet extends Model
{
    public function category ()
    {
        return $this->hasOne('App\Models\CategoryBouquet', 'id', 'category_id');
    }

    public function price ($id)
    {
        return Price::find($id)->name??'';
    }
}
