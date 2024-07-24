<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animalsData = [
            [
                'name' => 'Lion',
                'species' => 'Panthera leo',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Lion_waiting_in_Namibia.jpg'
            ],
            [
                'name' => 'Elephant',
                'species' => 'Loxodonta africana',
                'alimentation' => 'Herbivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/63/African_elephant_warning_raised_trunk.jpg'
            ],
            [
                'name' => 'Tiger',
                'species' => 'Panthera tigris',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/56/Tiger.50.jpg'
            ],
            [
                'name' => 'Giraffe',
                'species' => 'Giraffa camelopardalis',
                'alimentation' => 'Herbivore',
                'image' => 'https://cloud.rtl.it/RTLFM/News/Article/1000x1000/oggi-a-la-giornata-mondiale-dedicata-alla-giraffa-xxlts.jpg'
            ],
            [
                'name' => 'Zebra',
                'species' => 'Equus quagga',
                'alimentation' => 'Herbivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/60/Equus_quagga.jpg'
            ],
            [
                'name' => 'Panda',
                'species' => 'Ailuropoda melanoleuca',
                'alimentation' => 'Herbivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Grosser_Panda.JPG'
            ],
            [
                'name' => 'Kangaroo',
                'species' => 'Macropus rufus',
                'alimentation' => 'Herbivore',
                'image' => 'https://www.thoughtco.com/thmb/OqANUu4U3tNL1Uo2n19uX6PzbM8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/red_kangaroo-24c18ab08dc145f1a798abd4b820390a.jpg'
            ],
            [
                'name' => 'Penguin',
                'species' => 'Aptenodytes forsteri',
                'alimentation' => 'Carnivore',
                'image' => 'https://storage.googleapis.com/oceanwide_web/media-dynamic/cache/widen_1600/media/default/0001/05/30627f237982b80399f5d2db0c8daeeea38a5950.jpeg'
            ],
            [
                'name' => 'Koala',
                'species' => 'Phascolarctos cinereus',
                'alimentation' => 'Herbivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/49/Koala_climbing_tree.jpg'
            ],
            [
                'name' => 'Polar Bear',
                'species' => 'Ursus maritimus',
                'alimentation' => 'Carnivore',
                'image' => 'https://files.worldwildlife.org/wwfcmsprod/images/Polar_bear_with_cubs_in_Wapusk_WW266666/carousel_small/25v6lznpnn_Polar_bear_with_cubs_in_Wapusk_WW266666.jpg'
            ],
            [
                'name' => 'Wolf',
                'species' => 'Canis lupus',
                'alimentation' => 'Carnivore',
                'image' => 'https://static.scientificamerican.com/sciam/cache/file/81EBC93D-A2CA-4898-88D4AEE9CF6BA383_source.jpg?crop=16%3A9%2Csmart&w=1920'
            ],
            [
                'name' => 'Cheetah',
                'species' => 'Acinonyx jubatus',
                'alimentation' => 'Carnivore',
                'image' => 'https://live.staticflickr.com/65535/53225954444_b89bb02440_b.jpg'
            ],
            [
                'name' => 'Leopard',
                'species' => 'Panthera pardus',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/4d/Leopard_africa.jpg'
            ],
            [
                'name' => 'Rhino',
                'species' => 'Rhinocerotidae',
                'alimentation' => 'Herbivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e0/White_Rhinoceros_in_Lake_Nakuru.jpg'
            ],
            [
                'name' => 'Hippopotamus',
                'species' => 'Hippopotamus amphibius',
                'alimentation' => 'Herbivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6b/Hippos_at_Lake_Naivasha.jpg'
            ],
            [
                'name' => 'Jaguar',
                'species' => 'Panthera onca',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/b/b3/Jaguar_%28Panthera_onca_palustris%29_male_three_quarters_face.jpg'
            ],
            [
                'name' => 'Orangutan',
                'species' => 'Pongo',
                'alimentation' => 'Omnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/3d/Orang_Utan%2C_Semenggok_Forest_Reserve%2C_Sarawak%2C_Borneo%2C_Malaysia.JPG'
            ],
            [
                'name' => 'Gorilla',
                'species' => 'Gorilla beringei',
                'alimentation' => 'Herbivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/f2/Mountain_Gorilla_in_Uganda.jpg'
            ],
            [
                'name' => 'Chimpanzee',
                'species' => 'Pan troglodytes',
                'alimentation' => 'Omnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8a/Chimpanzee-Head.jpg'
            ],
            [
                'name' => 'Crocodile',
                'species' => 'Crocodylinae',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/57/Nile_crocodile_head.jpg'
            ],
            [
                'name' => 'Alligator',
                'species' => 'Alligator mississippiensis',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/f4/Florida_alligator.jpg'
            ],
            [
                'name' => 'Flamingo',
                'species' => 'Phoenicopterus roseus',
                'alimentation' => 'Omnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e0/Flamingos_mating.jpg'
            ],
            [
                'name' => 'Peacock',
                'species' => 'Pavo cristatus',
                'alimentation' => 'Omnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Peacock_Plumage.jpg'
            ],
            [
                'name' => 'Parrot',
                'species' => 'Psittaciformes',
                'alimentation' => 'Omnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6d/African_Grey_Parrot.jpg'
            ],
            [
                'name' => 'Dolphin',
                'species' => 'Delphinidae',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/a/a1/Bottlenose_Dolphin_KSC04pd0178.jpg'
            ],
            [
                'name' => 'Whale',
                'species' => 'Balaenopteridae',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8d/Humpback_whale_noaa.jpg'
            ],
            [
                'name' => 'Seal',
                'species' => 'Pinnipedia',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/19/Bearded_seal.jpg'
            ],
            [
                'name' => 'Sea Lion',
                'species' => 'Otariinae',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e1/Steller_sea_lion2.jpg'
            ],
            [
                'name' => 'Shark',
                'species' => 'Selachimorpha',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/1d/White_shark.jpg'
            ],
            [
                'name' => 'Octopus',
                'species' => 'Octopoda',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/09/Octopus2.jpg'
            ],
        ];


        foreach($animalsData as $animalData){
            $newAnimal = new Animal();
            $newAnimal->name = $animalData['name'];
            $newAnimal->species = $animalData['species'];
            $newAnimal->alimentation = $animalData['alimentation'];
            $newAnimal->image = $animalData['image'];
            $newAnimal->save();
        };
    }
}
