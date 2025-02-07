<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    protected $fillable = [
        'ip',
        'user_agent',
        'url',
        'code',
        'method',
        'referrer',
        'language',
        'is_secure',
        'user_id',
    ];
}
