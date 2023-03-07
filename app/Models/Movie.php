<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'original_title','nationality','release_date','vote','cover_path'];
    // protected $guarded =[];
    public static function generateSlug($title){
        return Str::slug($title, '-');
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function casts(){
        return $this->belongsToMany(Cast::class);
    }

}
