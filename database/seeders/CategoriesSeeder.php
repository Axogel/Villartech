<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cac;
use Illuminate\Support\Facades\DB;



class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cacs')->insert([
            'name' =>  'News',
            'created_at' => now(),
            'updated_at' => now()
       ]);

       DB::table('cacs')->insert([
        'name' =>  'Entertaiment',
        'created_at' => now(),
        'updated_at' => now()
         ]);

        DB::table('cacs')->insert([
        'name' =>  'Programming',
        'created_at' => now(),
        'updated_at' => now()
    ]);

    DB::table('cacs')->insert([
        'name' =>  'Learning',
        'created_at' => now(),
        'updated_at' => now()
    ]);

    DB::table('cacs')->insert([
        'name' =>  'Landings',
        'created_at' => now(),
        'updated_at' => now()
    ]);


    DB::table('cacs')->insert([
        'name' =>  'Bootcamps',
        'created_at' => now(),
        'updated_at' => now()
   ]);

   DB::table('cacs')->insert([
    'name' =>  'Virtualization',
    'created_at' => now(),
    'updated_at' => now()
     ]);

    DB::table('cacs')->insert([
    'name' =>  'Operating Systems',
    'created_at' => now(),
    'updated_at' => now()
]);

    DB::table('cacs')->insert([
        'name' =>  'Code Writers',
        'created_at' => now(),
        'updated_at' => now()
    ]);

    DB::table('cacs')->insert([
        'name' =>  'Designings',
        'created_at' => now(),
        'updated_at' => now()
    ]);
    }
}
