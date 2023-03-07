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
        $casts = ['Tom Hanks', 'Meryl Streep', 'Denzel Washington', 'Viola Davis', 'Anthony Hopkins', 'Emma Stone', 'Leonardo DiCaprio', 'Jennifer Lawrence', 'Brad Pitt', 'Angelina Jolie', 'Charlize Theron', 'Matt Damon', 'Julia Roberts', 'George Clooney', 'Cate Blanchett', 'Robert De Niro', 'Al Pacino', 'Jack Nicholson', 'Dustin Hoffman', 'Tom Cruise', 'Nicole Kidman', 'Kate Winslet', 'Johnny Depp', 'Halle Berry', 'Samuel L. Jackson', 'Will Smith', 'Jodie Foster', 'Kevin Spacey', 'Robin Williams', 'Sean Connery', 'Morgan Freeman', 'Mel Gibson', 'Sandra Bullock', 'Jim Carrey', 'Keanu Reeves', 'Mark Wahlberg', 'Scarlett Johansson', 'Chris Evans', 'Ryan Reynolds', 'Gal Gadot', 'Robert Downey Jr.'];

        foreach($casts as $cast){
            $newCast = new Cast();
            $newCast->nome_cognome = $cast;
            $newCast->slug = Cast::generateSlug($cast);
            $newCast->save();

        }
        
    }
}
