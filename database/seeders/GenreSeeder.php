<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Fantasy', 'Avventura', 'Horror', 'Thriller', 'Azione', 'Noir', 'Comico','Pulp', 'Drammatico','Sci-fi'];
        foreach($genres as $genre){
            $newGenre = new Genre();
            $newGenre->genre = $genre;
            $newGenre->slug = Genre::generateSlug($genre);

            $newGenre->save();

        }
    }
}
