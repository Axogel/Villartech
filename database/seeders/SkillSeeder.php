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
        DB::table('skills')->insert([
            'name' =>  'PHP',
       ]);
       DB::table('skills')->insert([
        'name' =>  'NODEJS',
        ]);
        DB::table('skills')->insert([
            'name' =>  'HTML5',
        ]);
        DB::table('skills')->insert([
            'name' =>  'CSS3',
        ]);
        DB::table('skills')->insert([
            'name' =>  'ANGULAR',
        ]);
        DB::table('skills')->insert([
            'name' =>  'VUEJS',
        ]);
        DB::table('skills')->insert([
            'name' =>  'NUXT',
        ]);
        DB::table('skills')->insert([
            'name' =>  'NEXT',
        ]);
        DB::table('skills')->insert([
            'name' =>  'REACT',
        ]);
        DB::table('skills')->insert([
            'name' =>  'LARAVEL',
        ]);
        DB::table('skills')->insert([
            'name' =>  'CODEIGNITER',
        ]);
        DB::table('skills')->insert([
            'name' =>  'SLIM',
        ]);
        DB::table('skills')->insert([
            'name' =>  'SELENIUM',
        ]);
        DB::table('skills')->insert([
            'name' =>  'CHROME EXTENSION',
        ]);
    }
}
