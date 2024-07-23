<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animalsData = [

            [
                'id' => 1,
                'name' => 'Wolf',
                'species' => 'Canis lupus',
                'age' => 4,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/1c/Canis_lupus_laying_in_grass.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 2,
                'name' => 'Bison',
                'species' => 'Bison bison',
                'age' => 8,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/American_bison_k5680-1.jpg/1280px-American_bison_k5680-1.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 3,
                'name' => 'Grizzly Bear',
                'species' => 'Ursus arctos horribilis',
                'age' => 5,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/08/Grizzly_Bear_003.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 4,
                'name' => 'Elk',
                'species' => 'Cervus canadensis',
                'age' => 6,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/62/Rocky_Mountain_Bull_Elk.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 5,
                'name' => 'Bald Eagle',
                'species' => 'Haliaeetus leucocephalus',
                'age' => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e4/Haliaeetus_leucocephalus_-Alaska_-USA_-flying-8.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 6,
                'name' => 'Moose',
                'species' => 'Alces alces',
                'age' => 7,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Moose_superior.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 7,
                'name' => 'Pronghorn',
                'species' => 'Antilocapra americana',
                'age' => 4,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/40/Pronghorn_Antelope.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 8,
                'name' => 'Coyote',
                'species' => 'Canis latrans',
                'age' => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7e/Coyote_portrait.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 9,
                'name' => 'Bighorn Sheep',
                'species' => 'Ovis canadensis',
                'age' => 5,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/42/Bighorn_Sheep_Ram_Yellowstone_2005.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 10,
                'name' => 'Red Fox',
                'species' => 'Vulpes vulpes',
                'age' => 2,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Vulpes_vulpes_standing_in_snow.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 11,
                'name' => 'American Beaver',
                'species' => 'Castor canadensis',
                'age' => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6b/American_Beaver.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 12,
                'name' => 'River Otter',
                'species' => 'Lontra canadensis',
                'age' => 4,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/4c/North_American_River_Otter.JPG',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 13,
                'name' => 'Black Bear',
                'species' => 'Ursus americanus',
                'age' => 6,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/12/Black_bear_large.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 14,
                'name' => 'Gray Wolf',
                'species' => 'Canis lupus',
                'age' => 5,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7a/Canis_lupus_laying.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 15,
                'name' => 'Bobcat',
                'species' => 'Lynx rufus',
                'age' => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8c/Bobcat2.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 16,
                'name' => 'Bald Eagle',
                'species' => 'Haliaeetus leucocephalus',
                'age' => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e4/Haliaeetus_leucocephalus_-Alaska_-USA_-flying-8.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 17,
                'name' => 'Moose',
                'species' => 'Alces alces',
                'age' => 7,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Moose_superior.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 18,
                'name' => 'Pronghorn',
                'species' => 'Antilocapra americana',
                'age' => 4,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/40/Pronghorn_Antelope.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 19,
                'name' => 'Coyote',
                'species' => 'Canis latrans',
                'age' => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7e/Coyote_portrait.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 20,
                'name' => 'Bighorn Sheep',
                'species' => 'Ovis canadensis',
                'age' => 5,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/42/Bighorn_Sheep_Ram_Yellowstone_2005.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 21,
                'name' => 'Red Fox',
                'species' => 'Vulpes vulpes',
                'age' => 2,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Vulpes_vulpes_standing_in_snow.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 22,
                'name' => 'American Beaver',
                'species' => 'Castor canadensis',
                'age' => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6b/American_Beaver.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 23,
                'name' => 'River Otter',
                'species' => 'Lontra canadensis',
                'age' => 4,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/4c/North_American_River_Otter.JPG',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 24,
                'name' => 'Black Bear',
                'species' => 'Ursus americanus',
                'age' => 6,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/12/Black_bear_large.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 25,
                'name' => 'Gray Wolf',
                'species' => 'Canis lupus',
                'age' => 5,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7a/Canis_lupus_laying.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 26,
                'name' => 'Bobcat',
                'species' => 'Lynx rufus',
                'age' => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8c/Bobcat2.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 27,
                'name' => 'Bald Eagle',
                'species' => 'Haliaeetus leucocephalus',
                'age' => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e4/Haliaeetus_leucocephalus_-Alaska_-USA_-flying-8.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 28,
                'name' => 'Moose',
                'species' => 'Alces alces',
                'age' => 7,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Moose_superior.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 29,
                'name' => 'Pronghorn',
                'species' => 'Antilocapra americana',
                'age' => 4,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/40/Pronghorn_Antelope.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ],
            [
                'id' => 30,
                'name' => 'Coyote',
                'species' => 'Canis latrans',
                'age' => 3,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7e/Coyote_portrait.jpg',
                'created_at' => '2023-07-22 12:34:56',
                'updated_at' => '2023-07-22 12:34:56'
            ]
        ];

        foreach ( $animalsData as $animalData) {
            $newAnimal = new Animal();
            $newAnimal -> save();
        }
    }
}

