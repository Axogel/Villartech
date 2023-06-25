<?php

namespace Database\Seeders;
use App\Models\Testimony;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $tesmonials = [
        [
            'author'=> 'HEZI HERSCOVITCH',
            'description'=> ' Zapata is a great developer and really knows his PHP, follows good design principles. Furthermore he is a great team player. He delivered upto my expectations. I am very happy and would recommend him for his Laravel Knowledge. I Will definitely work with him in future. ',
            'descriptionEs'=> ' Zapata es un gran desarrollador y realmente conoce su PHP, sigue buenos principios de diseño. Además, es un gran jugador de equipo. Cumplió mis expectativas. Estoy muy contento y lo recomendaría por su conocimiento de Laravel. Lo haré definitivamente trabajaré con él en el futuro. ',
            'image'=> 'uploads/images/testimonials/hezi.jpg',
            'active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'author'=> 'MARTIN BARRIONUEVO',
            'description'=> ' José manuel is a bright and talented developer who has helped us all througout this project. 100% recommended and will surely hire him again in the future. ',
            'descriptionEs'=> 'José manuel es un desarrollador brillante y talentoso que nos ha ayudado a todos a lo largo de este proyecto. Recomendado al 100% y seguramente lo contratará nuevamente en el futuro. ',
            'image' => 'uploads/images/testimonials/martin.jpg',
            'active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]

        ];
       Testimony::insert($tesmonials);

    }
}
