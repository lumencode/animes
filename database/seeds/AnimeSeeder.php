<?php

use App\Anime;
use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BD::table('episodes')->truncate();
        BD::table('animes')->truncate();

        Anime::create([
            'name'
        ]);
    }
}
