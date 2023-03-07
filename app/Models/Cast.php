<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Cast extends Model
{
    use HasFactory;
    protected $fillable = ['nome_cognome', 'slug'];

        public static function generateSlug($nome_cognome){
        return Str::slug($nome_cognome, '-');
    }
    public function movies(){
        return $this->belongsToMany(Movie::class);
    }
}
