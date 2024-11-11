<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'release_date' => '1994-09-23',
                'genre' => 'Drama',
                'rating' => 9.3,
                'duration' => 142,
                'director' => 'Frank Darabont',
                'cast' => 'Tim Robbins, Morgan Freeman',
                'language' => 'English',
                'country' => 'USA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'release_date' => '1972-03-24',
                'genre' => 'Crime, Drama',
                'rating' => 9.2,
                'duration' => 175,
                'director' => 'Francis Ford Coppola',
                'cast' => 'Marlon Brando, Al Pacino',
                'language' => 'English',
                'country' => 'USA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Inception',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
                'release_date' => '2010-07-16',
                'genre' => 'Action, Adventure, Sci-Fi',
                'rating' => 8.8,
                'duration' => 148,
                'director' => 'Christopher Nolan',
                'cast' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page',
                'language' => 'English',
                'country' => 'USA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Parasite',
                'description' => 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.',
                'release_date' => '2019-05-30',
                'genre' => 'Comedy, Drama, Thriller',
                'rating' => 8.6,
                'duration' => 132,
                'director' => 'Bong Joon Ho',
                'cast' => 'Kang-ho Song, Sun-kyun Lee, Yeo-jeong Jo',
                'language' => 'Korean',
                'country' => 'South Korea',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.',
                'release_date' => '2008-07-18',
                'genre' => 'Action, Crime, Drama',
                'rating' => 9.0,
                'duration' => 152,
                'director' => 'Christopher Nolan',
                'cast' => 'Christian Bale, Heath Ledger, Aaron Eckhart',
                'language' => 'English',
                'country' => 'USA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
