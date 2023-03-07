<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cast;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $casts = config('actorArr.actors');
        foreach ($casts as $cast) {
            $newCast = new Cast();
            $newCast->nome_cognome = $cast;
            $newCast->slug = Cast::generateSlug($cast);
            $newCast->save();
        }
    }
}
