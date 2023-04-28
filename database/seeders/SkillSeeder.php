<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
        [
            'name' =>  'PHP',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'NODEJS',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'HTML5',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'CSS3',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'ANGULAR',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'VUEJS',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'NUXT',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'NEXT',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'REACT',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'LARAVEL',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'CODEIGNITER',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'SLIM',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'SELENIUM',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' =>  'CHROME EXTENSION',
            'created_at' => now(),
            'updated_at' => now()
        ]
];
Skill::insert($skills);
    }
}
