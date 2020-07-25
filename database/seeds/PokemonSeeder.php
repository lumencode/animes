<?php

use App\Pokemon;
use App\Ubicacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    public function run()
    {
        DB::table('pokemones')->truncate();
        DB::table('ubicaciones')->truncate();

        $pokemon = Pokemon::create([
            'nombre' => 'Bulbasaur',
            'tipo'   => 'Hierba',
            'imagen' => '/img/001.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -28.74728,
            'longitud' => 137.92602
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -7.296747327308495,
            'longitud' => -78.58004453556534
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -7.818922296477282,
            'longitud' => -75.32536176360334
        ]));


        $pokemon = Pokemon::create([
            'nombre' => 'Charmander',
            'tipo'   => 'Fuego',
            'imagen' => '/img/004.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -12.4542166218626,
            'longitud' => -72.81849612760517
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -20.803726007523366,
            'longitud' => -61.452463505694126
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -30.492594570332756,
            'longitud' => -60.19253805874337
        ]));

        $pokemon = Pokemon::create([
            'nombre' => 'Squirtle',
            'tipo'   => 'Agua',
            'imagen' => '/img/007.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -28.74728,
            'longitud' => 137.92602
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -7.296747327308495,
            'longitud' => -78.58004453556534
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -7.818922296477282,
            'longitud' => -75.32536176360334
        ]));

        $pokemon = Pokemon::create([
            'nombre' => 'Caterpie',
            'tipo'   => 'Insecto',
            'imagen' => '/img/010.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -12.4542166218626,
            'longitud' => -72.81849612760517
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -20.803726007523366,
            'longitud' => -61.452463505694126
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -30.492594570332756,
            'longitud' => -60.19253805874337
        ]));

        $pokemon = Pokemon::create([
            'nombre' => 'Weedle',
            'tipo'   => 'Insecto',
            'imagen' => '/img/013.png',
        ]);
        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -28.74728,
            'longitud' => 137.92602
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -7.296747327308495,
            'longitud' => -78.58004453556534
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -7.818922296477282,
            'longitud' => -75.32536176360334
        ]));

        $pokemon = Pokemon::create([
            'nombre' => 'Pidgey',
            'tipo'   => 'Volador',
            'imagen' => '/img/016.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -28.74728,
            'longitud' => 137.92602
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -7.296747327308495,
            'longitud' => -78.58004453556534
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -7.818922296477282,
            'longitud' => -75.32536176360334
        ]));

        $pokemon = Pokemon::create([
            'nombre' => 'Rattata',
            'tipo'   => 'Normal',
            'imagen' => '/img/019.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -12.4542166218626,
            'longitud' => -72.81849612760517
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -20.803726007523366,
            'longitud' => -61.452463505694126
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -30.492594570332756,
            'longitud' => -60.19253805874337
        ]));

        $pokemon = Pokemon::create([
            'nombre' => 'Spearow',
            'tipo'   => 'Volador',
            'imagen' => '/img/021.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -12.4542166218626,
            'longitud' => -72.81849612760517
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -20.803726007523366,
            'longitud' => -61.452463505694126
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -30.492594570332756,
            'longitud' => -60.19253805874337
        ]));

        $pokemon = Pokemon::create([
            'nombre' => 'Ekans',
            'tipo'   => 'Veneno',
            'imagen' => '/img/023.png',
        ]);

        $pokemon = Pokemon::create([
            'nombre' => 'Pikachu',
            'tipo'   => 'Electrico',
            'imagen' => '/img/025.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -12.4542166218626,
            'longitud' => -72.81849612760517
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -20.803726007523366,
            'longitud' => -61.452463505694126
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -30.492594570332756,
            'longitud' => -60.19253805874337
        ]));

        $pokemon = Pokemon::create([
            'nombre' => 'Charmander',
            'tipo'   => 'Fuego',
            'imagen' => '/img/004.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => 17.393174575600625,
            'longitud' => -5.786666485985506
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => 11.854218019821559,
            'longitud' => 28.231320581613147
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => 31.130374993977384,
            'longitud' => 78.74287713652234
        ]));


        $pokemon = Pokemon::create([
            'nombre' => 'Mewtwo',
            'tipo'   => 'Psíquico',
            'imagen' => '/img/150.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => 17.393174575600625,
            'longitud' => -5.786666485985506
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => 11.854218019821559,
            'longitud' => 28.231320581613147
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => 31.130374993977384,
            'longitud' => 78.74287713652234
        ]));



        $pokemon = Pokemon::create([
            'nombre' => 'Mew',
            'tipo'   => 'Psíquico',
            'imagen' => '/img/151.png',
        ]);

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -12.4542166218626,
            'longitud' => -72.81849612760517
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -20.803726007523366,
            'longitud' => -61.452463505694126
        ]));

        $pokemon->ubicaciones()->save(new Ubicacion([
            'latitud'  => -30.492594570332756,
            'longitud' => -60.19253805874337
        ]));
    }
}