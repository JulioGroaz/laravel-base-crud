<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::create([
            'name' => 'Lion',
            'species' => 'Panthera leo',
            'age' => 5,
        ]);

        Animal::create([
            'name' => 'Elephant',
            'species' => 'Loxodonta',
            'age' => 10,
        ]);

        Animal::create([
            'name' => 'Giraffe',
            'species' => 'Giraffa camelopardalis',
            'age' => 7,
        ]);
    }
}

