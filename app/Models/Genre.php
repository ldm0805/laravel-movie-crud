<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Genre extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function generateSlug($genre)
    {
        return Str::slug($genre, '-');
    }

    public function movie()
    {
        return $this->hasMany(Movie::class);
    }
}
