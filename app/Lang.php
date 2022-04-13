<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    public static function getLangUrl ($lang)
    {
        $url = str_replace("/".app()->getLocale(), "/$lang", url()->current());
        return $url;
    }
}
