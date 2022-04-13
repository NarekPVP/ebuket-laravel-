<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Staff extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_invite_id');
    }
}
