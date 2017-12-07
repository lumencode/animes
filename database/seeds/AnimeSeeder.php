<?php

use App\Anime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->truncate();
        DB::table('animes')->truncate();

        Anime::create([
            'nombre' => 'Bleach',
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'imagen' => url('img/bleach.jpg')
        ]);

        Anime::create([
            'nombre' => 'Code Geass',
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'imagen' => url('img/code_geass.jpg')
        ]);

        Anime::create([
            'nombre' => 'Death Note',
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'imagen' => url('img/death_note.jpg')
        ]);

        Anime::create([
            'nombre' => 'Dragon Ball Z',
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'imagen' => url('img/dragon_ball_z.jpg')
        ]);

        Anime::create([
            'nombre' => 'Fairy Tail',
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'imagen' => url('img/fairy_tail.jpg')
        ]);

        Anime::create([
            'nombre' => 'Naruto Shippuden',
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'imagen' => url('img/naruto_shippuden.jpg')
        ]);

        Anime::create([
            'nombre' => 'One Piece',
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'imagen' => url('img/one_piece.jpg')
        ]);

        Anime::create([
            'nombre' => 'Shingeki no kyojin',
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'imagen' => url('img/shingeki_no_kyojin.jpg')
        ]);

        Anime::create([
            'nombre' => 'Super Campeones',
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'imagen' => url('img/super_campeones.jpg')
        ]);

        Anime::create([
            'nombre' => 'Zenki',
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'imagen' => url('img/zenki.jpg')
        ]);
    }
}
