<?php

namespace Database\Seeders;

use App\Models\Cour;
use App\Models\Formateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cour::insert([
            [
                "titre" => "Formation Laravel",
                "description" => fake()->sentence(20),
                "imgpath" => "imgs/download.png",
                "prix" => 50.0,

            ],
            [
                "titre" => "Formation Graphql",
                "description" => fake()->sentence(20),
                "imgpath" => "imgs/maxresdefault (1).jpg",
                "prix" => 30.0,

            ],
            [
                "titre" => "Formation React js",
                "description" => fake()->sentence(20),
                "imgpath" => "imgs/maxresdefault.jpg",
                "prix" => 40.0,

            ]
        ]);
    }
}
