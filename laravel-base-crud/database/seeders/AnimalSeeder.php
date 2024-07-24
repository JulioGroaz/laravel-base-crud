<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

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
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Giraffe_Mikumi_National_Park.jpg'
            ],
            [
                'name' => 'Zebra',
                'species' => 'Equus quagga',
                'alimentation' => 'Herbivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e7/Plains_Zebra_Equus_quagga.jpg'
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
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/4d/Kangaroo_Australia_01.jpg'
            ],
            [
                'name' => 'Penguin',
                'species' => 'Aptenodytes forsteri',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/74/Emperor_Penguin_Manchot_empereur.jpg'
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
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e0/Polar_Bear_-_Alaska_%28cropped%29.jpg'
            ],
            [
                'name' => 'Wolf',
                'species' => 'Canis lupus',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/89/Canis_lupus_laying_in_grass.jpg'
            ],
            [
                'name' => 'Cheetah',
                'species' => 'Acinonyx jubatus',
                'alimentation' => 'Carnivore',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/5e/Cheetah_at_Serengeti_National_Park.jpg'
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
