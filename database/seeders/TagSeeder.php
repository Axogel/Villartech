<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' =>  'PHP',
            'created_at' => now(),
            'updated_at' => now()
       ]);

       DB::table('tags')->insert([
        'name' =>  'CSS',
        'created_at' => now(),
        'updated_at' => now()
         ]);

        DB::table('tags')->insert([
        'name' =>  'JAVA',
        'created_at' => now(),
        'updated_at' => now()
    ]);

    DB::table('tags')->insert([
        'name' =>  'HTML',
        'created_at' => now(),
        'updated_at' => now()
    ]);

    DB::table('tags')->insert([
        'name' =>  'TEST',
        'created_at' => now(),
        'updated_at' => now()
    ]);
    }
}
