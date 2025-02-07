<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Link extends Model
{
    use HasFactory;

    private const ALLOWED_PREFIXES = ['e', 'i', 'o', 'm'];

    protected $fillable = [
        'url',
        'code',
        'user_id',
    ];

    public static function generateCustomCode()
    {
        // Allowed starting characters
        $prefix = self::ALLOWED_PREFIXES[array_rand(self::ALLOWED_PREFIXES)];

        // Generate 4 random alphanumeric characters
        $randomPart = Str::random(4);

        return $prefix . $randomPart;
    }

    public static function generateUniqueCode()
    {
        do {
            $code = self::generateCustomCode();
        } while (Link::where('code', $code)->exists());

        return $code;
    }
}
